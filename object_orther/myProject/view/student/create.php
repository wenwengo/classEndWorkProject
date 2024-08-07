<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>

    </style>
</head>

<body>

    <div class="container mt-3">
        <h3>
            Student Create
        </h3>
    </div>
    <div class="container mt-3">
        <form action="../../api/student/store.php" method="get" id="myForm" enctype="multipart/form-data">
            <div class="row">
                <div class="col-12 mt-3">
                    <label for="">name</label>
                    <input type="text" class="form-control" name="name" id="">
                </div>
                <div class="col-12 mt-3">
                    <label for="">mobile</label>
                    <input type="text" class="form-control" name="mobile" id="">
                </div>
                <div class="col-12 mt-3">
                    <input type="hidden" class="form-control" name="address" id="" value="taipei input">
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit">Button</button>
                    </div>
                </div>
            </div>
        </form>
    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- js or jqery -->
    <script>
        $(document).ready(function() {
            // bind
            const myForm = $('#myForm');
            console.log('myForm', myForm);

            // action
            myForm.submit(function(e) {
                e.preventDefault();
                console.log('submit ok');

                // let data = $(this).serialize();
                let data = $(this).serializeArray();
                // console.log('data', data);
                // console.log('typeof(data)', typeof(data));

                // 方法一 xxx
                let tmpObj = {
                    'name': 'address',
                    'mobile': 'taipei'
                };
                data.push(tmpObj);
                // console.log(data);;

                // 方法二
                // html form hidden
                console.log('data', data);

                // ajax
                url = "../../api/student/store.php";
                $.ajax({
                    type: "get",
                    url: url,
                    data: data,
                    // dataType: "json",
                    success: function(res) {
                        console.log('res', res);
                        let result = res.msg;
                        // let toUrl = res.toUrl;
                        if (result = "ok") {
                            console.log('ajax insert ok');
                            // window.location.href = "http://localhost";
                            // window.location.href = toUrl;
                        }
                    }
                });
                // ajax end

            });



        });
        // jquery end
    </script>
</body>

</html>