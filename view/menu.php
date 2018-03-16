<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<section>
    <article>
        <h3>Menu</h3>
        <a href="?page=index">Main</a>
        <a href="?page=add">Add new product</a>
        <a href="?page=constructor">Product constructor</a>

        <ul>
            <?foreach ($results as $product_name=>$product_info):?>
                <li class="product">
                    <p class="name"><?=$product_name?> - <span class="price"><?=$product_info['total_price']?></span></p>
                    <div class="ingridients">
                        <?foreach($product_info['ingridients'] as $ingridient):?>
                            <p class="ingrid"><?=$ingridient['ingredient']?></p>
                        <?endforeach;?>
                    </div>
                </li>
            <?endforeach;?>
        </ul>
    </article>
</section>
</body>
</html>