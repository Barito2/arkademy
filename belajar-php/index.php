<?php
include "show-data.php";
include "update-data.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Profil</title>
</head>

<body>
    <nav>
        <div class="mobile">
            <a href="" onclick="showMenu()">MENU</a>
        </div>
        <ul id="menu">
            <li><a href=""">HOME</a></li>
            <li><a href=" #">PRODUCT</a></li>
            <li><a href="#">GALLERY</a></li>
            <li><a href="#">NEWS</a></li>
            <li><a href="#">INVENTORY</a></li>
        </ul>
    </nav>
    <section id="box-profile">
        <div class="img-profile">
            <div class="photo" style="background-image: url(assets/img/permen.jpg);"></div>
        </div>
        <div class="description">
            <h1 id="pName"><?= $nama ?></h1>
            <p id="pRole"><?= $role ?></p>
            <a href="#input-form" class="button bg-green" onclick="editForm()">Edit</a>
            <a href="#" class="button border-blue">Resume</a>
        </div>
        <div class="information">
            <div class="data">
                <p class="field">Available</p>
                <p class="text-gray" id="pAvailable"><?= $available ?></p>
            </div>
            <div class="data">
                <p class="field">Age</p>
                <p class="text-gray" id="pAge"><?= $age ?></p>
            </div>
            <div class="data">
                <p class="field">Location</p>
                <p class="text-gray" id="pLocation"><?= $location ?></p>
            </div>
            <div class="data">
                <p class="field">Year Experiance</p>
                <p class="text-gray" id="pExperience"><?= $year ?></p>
            </div>
            <div class="data">
                <p class="field">Email</p>
                <p class="text-gray" id="pEmail"><?= $email ?></p>
            </div>
        </div>
    </section>
    <section id="input-form">
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form">
                <input type="hidden" id="inpId" name="id" value="<?= $id ?>">
                <label for="name">Name</label>
                <input type="text" id="inpName" name="name">
                </divcla>
                <div class="form">
                    <label for="role">Role</label>
                    <input type="text" id="inpRole" name="role">
                </div>
                <div class="form">
                    <label for="availability">Availability</label>
                    <input type="text" id="inpAvailable" name="availability">
                </div>
                <div class="form">
                    <label for="age">Age</label>
                    <input type="number" id="inpAge" name="age">
                </div>
                <div class="form">
                    <label for="location">Location</label>
                    <input type="text" id="inpLocation" name="location">
                </div>
                <div class="form">
                    <label for="experience">Year experiance</label>
                    <input type="number" id="inpExperience" name="experience">
                </div>
                <div class="form">
                    <label for="email">Email</label>
                    <input type="email" id="inpEmail" name="email">
                </div>
                <div>
                    <input type="submit" name="submit" value="SUBMIT" class="bg-blue">
                </div>
        </form>
    </section>
    <script>
        var formMenu = document.getElementById("input-form");
        formMenu.style.display = "none";

        function editForm() {
            if (formMenu.style.display === "none") {
                formMenu.style.display = "block";
            } else {
                formMenu.style.display = "none";
            }

            var name = document.getElementById("pName").innerHTML;
            var role = document.getElementById("pRole").innerHTML;
            var available = document.getElementById("pAvailable").innerHTML;
            var age = document.getElementById("pAge").innerHTML;
            var location = document.getElementById("pLocation").innerHTML;
            var experience = document.getElementById("pExperience").innerHTML;
            var Email = document.getElementById("pEmail").innerHTML;

            document.getElementById("inpName").value = name;
            document.getElementById("inpRole").value = role;
            document.getElementById("inpAvailable").value = available;
            document.getElementById("inpAge").value = age;
            document.getElementById("inpLocation").value = location;
            document.getElementById("inpExperience").value = experience;
            document.getElementById("inpEmail").value = Email;
        }



        function showMenu() {
            var menu = document.getElementById("menu");
            var box = document.getElementById("box-profile");
            if (menu.style.display === "block") {
                menu.style.display = "none";
                box.style.paddingTop = "0px";
            } else {
                menu.style.display = "block";
                box.style.paddingTop = "125px";
            }
        }
    </script>
</body>

</html>