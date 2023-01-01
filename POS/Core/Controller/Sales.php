<?php

namespace Core;

use Core\Base\controller;
use Core\Model\Transaction;

class Sales extends controller
{

    protected $request_body;
    protected $http_code = 200;

    protected $response_schema = array(
        "success" => true,
        "message_code" => "",
        "body" => []
    );

    function __construct()
    {
        $this->request_body = json_decode(file_get_contents("php://input", true));
    }
    public function render()
    {
        header("Content-Type: application/json");
        http_response_code($this->http_code);
        echo json_encode($this->response_schema);
    }

    public function index()
    {
        // Try to execute the code and catch any exceptions that are thrown
        try {
            // Create a new Transaction object
            $transaction = new Transaction;

            // Get the user_id from the session data
            $user_id = $_SESSION['user']['user_id'];

            // Retrieve the transactions for the user with the specified user_id
            $sql = "SELECT * FROM users_transactions WHERE user_id = $user_id";
            $transaction_query = $transaction->connection->query($sql);

            // Initialize an array to store the retrieved transactions
            $transaction_user = array();

            // If there are any transactions for the user, add them to the array
            if ($transaction_query->num_rows > 0) {
                while ($row = $transaction_query->fetch_object()) {
                    $transaction_user[] = $row;
                }

                // Initialize an array to store the final transactions after applying the additional conditions
                $transactions = array();

                // For each transaction in the transaction_user array, retrieve additional transaction data
                // based on the transaction_id and created_at condition
                foreach ($transaction_user as $relation) {
                    $sql = "SELECT * FROM transactions WHERE id = {$relation->transaction_id} AND created_at >= $transaction_query_conditions";
                    $transaction_query_conditions = $transaction->connection->query($sql);
                    if ($transaction_query_conditions->num_rows > 0) {
                        while ($row = $transaction_query_conditions->fetch_object()) {
                            $transactions[] = $row;
                        }
                    }
                }

                // If no transactions were found, throw an exception
                if (empty($transactions)) {
                    throw new \Exception('No transactions were found!');
                }

                // Set the response schema with the retrieved transactions and a success message
                $this->response_schema['body'] = $transactions;
                $this->response_schema['message_code'] = "transactions_collected_successfuly";
            }
        } catch (\Exception $error) {
            // If an exception is caught, set the response schema with a failure message and the error message
            $this->response_schema['success'] = false;
            $this->response_schema['message_code'] = $error->getMessage();
            $this->http_code = 404;
        }
    }
}
