<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="../jquery-2.2.2.min.js"></script>
</head>
<body>
<section>
    <a href="?page=index">Main</a>
    <a href="?page=menu">Menu</a>
    <a href="?page=add">Add new product</a>
    <article>
        <h3>The designer of the drink</h3>
        <?foreach ($results as $result){?>
        <label for=""><input type="checkbox" value="<?=$result['price']?>"><?=$result['ingredient']?></label>
        <?}?>
        <p class="result">Your drink will cost: <span>0</span></p>
    </article>
</section>
<script>
    $(document).ready(function () {
        $('[type=checkbox]').change(function () {
            var res = $(this).is(':checked')?parseInt($(this).val()):parseInt('-'+$(this).val());
            $('.result span').text(parseInt($('.result span').text()) + res);
        })
    })
</script>
</body>
</html>