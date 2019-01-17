<?php
error_reporting(0);
require_once "../app/funcs.inc.php";
session_start();
checkSession();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Thrifter.</title>

    <!-- Meta Tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale=1, user-scalable=yes">

    <!-- extern stylesheets-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css"
          integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- custom style-->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/product.css">
    <link rel="stylesheet" href="../css/footer.css">
    <!-- scripts-->
    <script src="../JS/jquery-3.3.1.min.js"></script>
    <script src="../JS/popper.min.js"></script>
    <script src="../JS/bootstrap.min.js"></script>
    <script src="../JS/vh-fix.js"></script>
    <script src="../JS/base.js"></script>

</head>
<body>
<div class="post-upload-modal">
    <div class="post-upload-inner">
        <div class="post-upload-head row d-flex justify-content-between ">
            <a onclick="closePost()"><i class="fas fa-times fa-lg"></i></a>
            <a onclick="validatepost()" class="text-primary">fertig</a>
        </div>
        <div class="post-upload-body py-3" id="postUpload">
            <div class="form-outer">
                <form name="newPost" enctype="multipart/form-data" id="uploadPost">
                    <label for="picture">Bild</label>
                    <input id="picture" type="file" name="picture" class="form-control-file" accept="image/*">

                    <label id="title_text" for="titel">Titel</label>
                    <input id="titel" class="form-control" name="title" type="text">

                    <label id="description_text" for="description">Beschreibung</label>
                    <input id="description" class="form-control" name="description" type="text">

                    <label id="price_text" for="price">Preis</label>
                    <input id="price" type="number" min="0" max="9999" name="price" class="form-control">

                    <label for="color">Farbe</label>
                    <select id="color" name="color" class="form-control">
                        <option disabled selected value> -- wähle eine Option -- </option>
                        <?php
                        $sql = mysqli_query(establishDB(), "SELECT col_id, col_name FROM col_colors");
                        while ($row = $sql->fetch_assoc()){
                            echo "<option value=\"". $row['col_id']. "\">" . $row['col_name'] . "</option>";
                        }
                        ?>
                    </select>
                    <label for="brand">Marke</label>
                    <select id="brand" name="brand" class="form-control">
                        <option disabled selected value> -- wähle eine Option -- </option>
                        <?php
                            $sql = mysqli_query(establishDB(), "SELECT b_id, b_name FROM b_brands");
                            while ($row = $sql->fetch_assoc()){
                                echo "<option value=\"". $row['b_id']. "\">" . $row['b_name'] . "</option>";
                            }
                        ?>
                    </select>
                    <label for="gender">Für</label>
                    <select id="gender" name="gender" class="form-control">
                        <option disabled selected value> -- wähle eine Option -- </option>
                        <?php
                            $sql = mysqli_query(establishDB(), "SELECT g_id, g_name FROM g_genders");
                            while ($row = $sql->fetch_assoc()){
                                echo "<option value=\"". $row['g_id']. "\">" . $row['g_name'] . "</option>";
                            }
                        ?>
                    </select>
                    <label for="zustand">Zustand</label>
                    <select id="zustand" name="zustand" class="form-control">
                        <option disabled selected value> -- wähle eine Option -- </option>
                        <?php
                        $sql = mysqli_query(establishDB(), "SELECT con_id, con_description FROM con_conditions");
                        while ($row = $sql->fetch_assoc()){
                            echo "<option value=\"". $row['con_id']. "\">" . $row['con_description'] . "</option>";
                        }
                        ?>
                    </select>
                    <label for="category">Kategorie</label>
                    <select id="category" name="category" class="form-control">
                        <option disabled selected value> -- wähle eine Option -- </option>
                        <?php
                        $sql = mysqli_query(establishDB(), "SELECT ca_id, ca_name FROM ca_categories");                        while ($row = $sql->fetch_assoc()){
                            echo "<option value=\"". $row['ca_id']. "\">" . $row['ca_name'] . "</option>";
                        }
                        ?>
                    </select>
                    <label for="size">Größe</label>
                    <select id="size" name="size" class="form-control">
                        <option disabled selected value> -- wähle eine Option -- </option>
                        <?php
                        $sql = mysqli_query(establishDB(), "SELECT s_id, s_unittype, s_value FROM s_sizes");
                        while ($row = $sql->fetch_assoc()){
                            echo "<option value=\"". $row['s_id']. "\">" . $row['s_unittype'] .' '. $row['s_value'] . "</option>";
                        }
                        ?>
                    </select>

                    <input type="button" id="UploadPost" class="btn btn-secondary rounded-0 w-100 my-1" value="Hochladen"/>
                    <div id="postupload-error-message" class="my-3 text-danger"></div>
                    <span id="success_message" class="text-success"></span>
                </form>
                <script>
                    $(document).ready(function () {
                        $("#UploadPost").click(function () {
                            if (validatepost_input())  {
                                var form = $('#uploadPost')[0];
                                var data = new FormData(form);

                                var title = document.newPost.title.value;
                                var description = document.newPost.description.value;
                                var price = document.newPost.price.value;
                                data.append('titleT', title);
                                data.append('descriptionT', description);
                                data.append('priceT', price);

                                var selector = document.getElementById('color');
                                var color = selector[selector.selectedIndex].value;
                                data.append('colorT', color);

                                var selector = document.getElementById('brand');
                                var brand = selector[selector.selectedIndex].value;
                                data.append('brandT', brand);

                                var selector = document.getElementById('gender');
                                var gender = selector[selector.selectedIndex].value;
                                data.append('genderT', gender);

                                var selector = document.getElementById('zustand');
                                var condition = selector[selector.selectedIndex].value;
                                data.append('conditionT', condition);

                                var selector = document.getElementById('category');
                                var category = selector[selector.selectedIndex].value;
                                data.append('categoryT', category);

                                var selector = document.getElementById('size');
                                var size = selector[selector.selectedIndex].value;
                                data.append('sizeT', size);

                                $.ajax({
                                    url: '../app/PostUpload.php',
                                    method: 'POST',
                                    type: 'POST',
                                    enctype: 'multipart/form-data',
                                    processData: false,
                                    contentType: false,
                                    data: data,
                                    success: function (data) {
                                        if (data !== 'success') {
                                            alert('doesnt work');
                                            $("#postupload-error-message").text(data);
                                        } else {
                                            $("#postupload-error-message").remove();
                                            //alert('works');
                                            $('#success_message').fadeIn().html('Post hochgeladen');
                                            $('form').trigger('reset');
                                            setTimeout(function () {
                                                $('#success_message').fadeOut('Slow');
                                                closePost();
                                            }, 2000);
                                        }
                                    }
                                });
                            }
                        });
                    });
                    function validatepost_input() {
                        resetpostupload();
                        var validate = true;
                        var errorstring = "";
                        var counter = 0;
                        if (document.newPost.title.value.length === 0) {
                            errorstring += "Titel darf nicht leer sein!";
                            counter++;
                            document.newPost.title.classList.add("input-wrong");
                            document.getElementById("title_text").classList.add("input-wrong-text");
                            validate = false;
                        }
                        if (document.newPost.description.value.length === 0) {
                            errorstring += "Beschreibung darf nicht leer sein!";
                            counter++;
                            document.newPost.description.classList.add("input-wrong");
                            document.getElementById("description_text").classList.add("input-wrong-text");
                            validate = false;
                        }
                        if (document.newPost.price.value < 0 || !document.newPost.price.value.length) {
                            counter++;
                            errorstring += "Preis ist zu klein!";
                            document.newPost.price.classList.add("input-wrong");
                            document.getElementById("price_text").classList.add("input-wrong-text");
                            validate = false;
                        }
                        if (!document.newPost.color) {
                            counter++;
                            errorstring += "Color auswählen!";
                            document.newPost.price.classList.add("input-wrong");
                            document.getElementById("price_text").classList.add("input-wrong-text");
                            validate = false;
                        }

                        if (!validate) {
                            if (counter <= 2) {
                                $("#postupload-error-message").text(errorstring);
                            } else {
                                $("#postupload-error-message").text('Es sind einige Eingaben fehlerhaft!');
                            }
                            counter=0;
                        } else {
                            return validate;
                        }
                        function resetpostupload() {
                            try {
                                var c = document.newPost.children;
                                for (let i = 0; i < c.length; i++) {
                                    if (c[i].classList.contains("input-wrong") || c[i].classList.contains("input-wrong-text")) {
                                        c[i].classList.remove("input-wrong");
                                        c[i].classList.remove("input-wrong-text");
                                    }
                                }
                                $("#error-message").text("");
                            } catch (e) {
                                console.log(e);
                            }
                            return true;
                        }
                    }
                </script>
            </div>
        </div>
    </div>
</div>
</body>
</html>