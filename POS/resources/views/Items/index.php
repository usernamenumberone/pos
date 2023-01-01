<?php
include '../header3.php'; 
?>

<div class="row h-100 col-10" style="text-align: justify;">
    <div class="card-container-pages">
        <div class="card">
            <a href="./index.php">
                <img src="../assets/img/all.png" alt="ALL-items">
                <p>ALL</p>
            </a>
        </div>
        <div class="card">
            <a href="./coffee.php">
                <img src="../assets/img/coffee.png" alt="COFFEE">
                <p>COFFEE</p>
            </a>
        </div>
        <div class="card">
            <a href="./juice.php">
                <img src="../assets/img/juice.png" alt="JUICES">
                <p>JUICES</p>
            </a>
        </div>
        <div class="card">
            <a href="./milk-passed.php">
                <img src="../assets/img/milk.png" alt="Milk Pased">
                <p>Milk Pased</p>
            </a>
        </div>
        <div class="card">
            <a href="./deseret.php">
                <img src="../assets/img/cover.png" alt="Deseret">
                <p>Deseret</p>
            </a>
        </div>
        <div class="card">
            <a href="./Sadwiches.php">
                <img src="../assets/img/sandwich.png" alt="sandwich">
                <p>Sandwich</p>
            </a>
        </div>
    </div>

    <div class="container-item">

        <div class="all-items">
            <h3>ALL Items(<?= $data->items_count ?>)</h3>
        </div>
        <?php foreach ($data->items as $item) : ?>
        <div class="row">
            <div class="col-3 ">
                <a href="#" class="card">
                    <img src="../assets/img/1.jpeg" class="card-img-top" alt="Item 2">
                    <div class="card-body">
                        <p class="card-text"> <?= $item->name ?></p>
                        <p class="card-text">Cost<?= $item->Cost ?></p>
                        <p class="card-text">Selling Price:<?= $item->Selling_Price ?></p>
                        <p class="card-text">Quantity: <?= $item->stock_quantity ?></p>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
            <div class="col-3">
                <a href="#" class="card">
                    <img src="../assets/img/2.jpeg" class="card-img-top" alt="Item 2">
                    <div class="card-body">
                        <p class="card-text">the name</p>
                        <p class="card-text">Cost: $70</p>
                        <p class="card-text">Selling Price: $80</p>
                        <p class="card-text">Quantity: 20</p>
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="#" class="card">
                    <img src="../assets/img/3.jpeg" class="card-img-top" alt="Item 2">
                    <div class="card-body">
                        <p class="card-text">the name</p>
                        <p class="card-text">Cost: $70</p>
                        <p class="card-text">Selling Price: $80</p>
                        <p class="card-text">Quantity: 20</p>
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="#" class="card">
                    <img src="../assets/img/_ (9).jpeg" class="card-img-top" alt="Item 2">
                    <div class="card-body">
                        <p class="card-text">the name</p>
                        <p class="card-text">Cost: $70</p>
                        <p class="card-text">Selling Price: $80</p>
                        <p class="card-text">Quantity: 20</p>
                    </div>
                </a>
            </div>




            <div class="col-3">
                <a href="#" class="card">
                    <img src="../assets/img/5.jpeg" class="card-img-top" alt="Item 2">
                    <div class="card-body">
                        <p class="card-text">the name</p>
                        <p class="card-text">Cost: $70</p>
                        <p class="card-text">Selling Price: $80</p>
                        <p class="card-text">Quantity: 20</p>
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="#" class="card">
                    <img src="../assets/img/6.jpeg" class="card-img-top" alt="Item 2">
                    <div class="card-body">
                        <p class="card-text">the name</p>
                        <p class="card-text">Cost: $70</p>
                        <p class="card-text">Selling Price: $80</p>
                        <p class="card-text">Quantity: 20</p>
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="#" class="card">
                    <img src="../assets/img/7.jpeg" class="card-img-top" alt="Item 2">
                    <div class="card-body">
                        <p class="card-text">the name</p>
                        <p class="card-text">Cost: $70</p>
                        <p class="card-text">Selling Price: $80</p>
                        <p class="card-text">Quantity: 20</p>
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="#" class="card">
                    <img src="../assets/img/8.jpeg" class="card-img-top" alt="Item 2">
                    <div class="card-body">
                        <p class="card-text">the name</p>
                        <p class="card-text">Cost: $70</p>
                        <p class="card-text">Selling Price: $80</p>
                        <p class="card-text">Quantity: 20</p>
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="#" class="card">
                    <img src="../assets/img/9.jpeg" class="card-img-top" alt="Item 2">
                    <div class="card-body">
                        <p class="card-text">the name</p>
                        <p class="card-text">Cost: $70</p>
                        <p class="card-text">Selling Price: $80</p>
                        <p class="card-text">Quantity: 20</p>
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="#" class="card">
                    <img src="../assets/img/10.jpeg" class="card-img-top" alt="Item 1">
                    <div class="card-body">
                        <p class="card-text">the name</p>
                        <p class="card-text">Cost: $50</p>
                        <p class="card-text">Selling Price: $60</p>
                        <p class="card-text">Quantity: 10</p>
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="#" class="card">
                    <img src="../assets/img/11.jpeg" class="card-img-top" alt="Item 2">
                    <div class="card-body">
                        <p class="card-text">the name</p>
                        <p class="card-text">Cost: $70</p>
                        <p class="card-text">Selling Price: $80</p>
                        <p class="card-text">Quantity: 20</p>
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="#" class="card">
                    <img src="../assets/img/12.jpeg" class="card-img-top" alt="Item 2">
                    <div class="card-body">
                        <p class="card-text">the name</p>
                        <p class="card-text">Cost: $70</p>
                        <p class="card-text">Selling Price: $80</p>
                        <p class="card-text">Quantity: 20</p>
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="#" class="card">
                    <img src="../assets/img/13.jpeg" class="card-img-top" alt="Item 2">
                    <div class="card-body">
                        <p class="card-text">the name</p>
                        <p class="card-text">Cost: $70</p>
                        <p class="card-text">Selling Price: $80</p>
                        <p class="card-text">Quantity: 20</p>
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="#" class="card">
                    <img src="../assets/img/14.jpeg" class="card-img-top" alt="Item 2">
                    <div class="card-body">
                        <p class="card-text">the name</p>
                        <p class="card-text">Cost: $70</p>
                        <p class="card-text">Selling Price: $80</p>
                        <p class="card-text">Quantity: 20</p>
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="#" class="card">
                    <img src="../assets/img/15.jpeg" class="card-img-top" alt="Item 2">
                    <div class="card-body">
                        <p class="card-text">the name</p>
                        <p class="card-text">Cost: $70</p>
                        <p class="card-text">Selling Price: $80</p>
                        <p class="card-text">Quantity: 20</p>
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="#" class="card">
                    <img src="../assets/img/16.jpeg" class="card-img-top" alt="Item 2">
                    <div class="card-body">
                        <p class="card-text">the name</p>
                        <p class="card-text">Cost: $70</p>
                        <p class="card-text">Selling Price: $80</p>
                        <p class="card-text">Quantity: 20</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    </div>

    <?php
include '../footer.php'; 
?>
