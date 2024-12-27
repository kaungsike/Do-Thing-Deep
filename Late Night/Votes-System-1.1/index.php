<?php include("./src/template/header.php") ?>
<?php include("./src/template/nav.php") ?>


<!-- Page Content -->
<div class="h-screen flex items-center justify-center">
    <div>
        <img src="./undraw_choose-card_es1o.svg" alt="">
    </div>
</div>

<script>
    if (localStorage.getItem("uniqueKey") === null) {
        const uniqueKey = crypto.randomUUID();

        localStorage.setItem("uniqueKey", uniqueKey);
        sessionStorage.setItem("uniqueKey", uniqueKey);

        console.log("!Key:", uniqueKey);
    } else {
        console.log("Key from localstore:", localStorage.getItem("uniqueKey"));
        console.log("Key from session:", sessionStorage.getItem("uniqueKey"));
    }
</script>

<?php include("./src/template/footer.php") ?>
