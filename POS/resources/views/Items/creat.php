<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body {
            background-color: #F9F8FA;
        }

        .image-upload>input {
            visibility: hidden;
            width: 0;
            height: 0
        }

        .image-upload img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-left: 150mm;
            margin-top: 25mm;
        }


        .form-group>input {
            border-radius: 20px;
            border-color: #4F362D;
        }

        .form-group>label {
            margin-right: 1rem;
        }


        .form-group>select {
            border-radius: 20px;
            border-color: #4F362D;
        }

        .btn {
            color: #ffffff;
            background-color: #6F4131;
            border-radius: 20px;
            border-color: #4F362D;
            margin-left: 135mm;
        }

        #name-place {
            margin-left: 110mm;
        }

        .row {
            margin-left: 50mm;
        }

        .form-group>label {
            color: #4F362D;
            font-family: Arial, sans-serif;
            margin-left: 35mm;
        }

        #name-place>label {
            margin-left: 45mm;
        }

        input:hover {
            border: 3px solid #CEAA9A;
        }

        select:hover {
            border: 3px solid #CEAA9A;
        }

        .btn:hover {
            background-color: #CEAA9A;
            border: 3px solid #CEAA9A;
        }


    </style>

</head>

<body>
  

    <section class="grid">
        <div class="container">
            <form action="" method="post" class="d-flex justify-content-center flex-column gap-3 px-5 mb-5 ">
                <div class="image-upload ">
                    <label for="file-input">
                        <img src="https://via.placeholder.com/300x300.png?text=UPLOAD" style="pointer-events: none" />
                    </label>

                    <input id="file-input" type="file" />
                </div>

                <div id="name-place" class="form-group col-4 mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control mt-2" id="name" name="name">
                </div>
                <div class="row ">
                    <div class="form-group col-5 mb-3">
                        <label for="category">Category</label>
                        <select class="form-control mt-2" id="category" name="category">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>
                    </div>
                    <div class="form-group col-5 mb-3">
                        <label for="cost">Cost</label>
                        <input type="number" class="form-control mt-2" id="cost" name="cost">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-5 mb-3">
                        <label for="selling_price">Selling Price</label>
                        <input type="number" class="form-control mt-2" id="selling_price" name="selling_price">
                    </div>
                    <div class="form-group col-5 mb-3">
                        <label for="stock_available">Stock Available</label>
                        <input type="number" class="form-control mt-2" id="stock_available" name="stock_available">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary col-2 mb-2 mb-3">Add Item</button>
            </form>

        </div>
    </section>



    <footer class="footer bg-dark py-3 mt-auto">
        <div class="container">
            <span class="text-muted">&copy; POS_HTU 2022</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="./index.js"></script>
</body>

</html>