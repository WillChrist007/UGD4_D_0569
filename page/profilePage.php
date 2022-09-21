<?php
include '../component/sidebar.php'
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
    solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="body d-flex justify-content-between">
        <h4>PROFILE</h4> <a href="../page/editProfilePage.php"><i style="color: red" class="bi bi-pencil-square"></i></a>
    </div>
    <hr>
    <!-- PROFILE -->
    <form action="../process/editProfileProcess.php" method="post">
        <div class="field">
            <label class="label">Name</label>
            <div class="control">
                <input class="form-control" name="name" type="text" disabled value="<?php echo $_SESSION['user']['name']; ?>">
            </div>
        </div>
        <br>

        <div class="field">
            <label class="label">Phone Number</label>
            <div class="control">
                <input class="form-control" name="phonenum" type="number" disabled value="<?php echo $_SESSION['user']['phonenum']; ?>">
            </div>
        </div>
        <br>

        <div class="field">
            <label class="label">Email</label>
            <div class="control">
                <input class="form-control" name="email" type="text" disabled value="<?php echo $_SESSION['user']['email']; ?>">
            </div>
        </div>
        <br>

        <div class="field">
            <label class="label">Job</label>
            <div class="control">
                <input class="form-control" name="job" type="text" disabled value="<?php echo $_SESSION['user']['job'];?>">
            </div>
        </div>
        <br>

        <div class="field">
            <label class="label">membership</label>
            <div class="control">
                <input class="form-control" name="membership" type="text" disabled value="<?php echo $_SESSION['user']['membership'];?>">
            </div>
        </div>
        <br>
    </form>
</div>
</aside>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>

</html>