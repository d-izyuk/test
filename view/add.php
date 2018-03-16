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
    <a href="?page=constructor">Product constructor</a>
    <article>
        <h3>Add product</h3>
        <div class="form">
            <div class="product">
                <p>
                    <label for="">Product name </label>
                    <input type="text" class="name">
                </p>
                <div class="ingredients">
                    <div>
                        <p>
                            <label for="">Ingredient </label>
                        </p>
                        <p class="ingridient-data">
                            <label for="">Name <input type="text" class="ingredient_name"></label>
                            <label for="">Price <input type="text" name="price" class="ingredient_price"></label>
                        </p>
                    </div>
                </div>
                <a href="javascript:void(0)" class="addingredient">Add ingredient</a>
            </div>
        </div>
        <a href="javascript:void(0)" class="addProduct">Add Product</a>
        <a href="javascript:void(0)" class="save">Save</a>
    </article>
</section>
<script type="text/javascript">
    $('body').on('click', '.addingredient', function () {
        $(this).prevAll('.ingredients').append('<div>\n' +
            '                        <p>\n' +
            '                            <label for="">Ingredient </label>\n' +
            '                        </p>\n' +
            '                        <p class="ingridient-data">\n' +
            '                            <label for="">Name <input type="text" class="ingredient_name"></label>\n' +
            '                            <label for="">Price <input type="text" name="price" class="ingredient_price"></label>\n' +
            '                        </p>\n' +
            '                    </div>');
    });

    $('.addProduct').click(function () {
        $('.form').append('<div class="product">\n' +
            '                <p>\n' +
            '                    <label for="">Product name </label>\n' +
            '                    <input type="text" class="name">\n' +
            '                </p>\n' +
            '                <div class="ingredients">\n' +
            '                    <div>\n' +
            '                        <p>\n' +
            '                            <label for="">Ingredient </label>\n' +
            '                        </p>\n' +
            '                        <p class="ingridient-data">\n' +
            '                            <label for="">Name <input type="text" class="ingredient_name"></label>\n' +
            '                            <label for="">Price <input type="text" name="price" class="ingredient_price"></label>\n' +
            '                        </p>\n' +
            '                    </div>\n' +
            '                </div>\n' +
            '                <a href="javascript:void(0)" class="addingredient">Add ingredient</a>\n' +
            '            </div>');
    });

    $('.save').click(function () {
        var product_name = $('.name');

        var str_ingredient_name = '';
        var str_ingredient_price = '';
        var p_name_arr = {};


        for(var i = 0; i < product_name.length; i++){
            var ingredients = $(product_name[i]).closest('.product').find('.ingridient-data');
            var text = $(product_name[i]).val();
            p_name_arr[text] = new Array();
            for(var j = 0; j < ingredients.length; j++){
                var ingredient_name = $(product_name[i]).closest('.product').find('.ingredient_name');
                var ingredient_price = $(product_name[i]).closest('.product').find('[name=price]');

                str_ingredient_name = $(ingredient_name[j]).val();
                str_ingredient_price = $(ingredient_price[j]).val();


                var ingrid = {'name':str_ingredient_name,'price':str_ingredient_price};
                p_name_arr[text].push(ingrid);
            }

            p_name_arr[text] = JSON.stringify( p_name_arr[text]);

        }
        console.log(p_name_arr);

        $.ajax({
            url: 'index.php?page=add&action=addProduct',
            type: 'post',
            data: p_name_arr,
            success: function (res) {

            }
        })
    });
</script>
</body>
</html>