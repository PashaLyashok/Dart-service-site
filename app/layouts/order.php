<main class="main">
    <div class="container_main">
        <section class="form">
            <div class="container_form">
                <h2>Order</h2>
                <hr/>
                <form class="form_order" method="POST">
                    <div class="container_input">
                        <p>Enter Your Firstname -> </p>
                        <input class="main" type="text" placeholder="Firstname" maxlength="35" name="firstname" required value="<?php if(isset($_COOKIE['firstname'])) echo $_COOKIE['firstname'];?>"/>
                        <p>Enter Your Lastname -> </p>
                        <input class="main" type="text" placeholder="Lastname" maxlength="35" name="lastname" required value="<?php if(isset($_COOKIE['lastname'])) echo $_COOKIE['lastname'];?>"/>
                        <p>Enter Your email -> </p>
                        <input class="main" type="email" placeholder="test@gmail.com" maxlength="35" name="email" required value="<?php if(isset($_COOKIE['email'])) echo $_COOKIE['email'];?>"/>
                        <p>Enter Your phone -> </p>
                        <input class="main" type="phone" placeholder="+375(code)*******" maxlength="35" name="phone" required value="<?php if(isset($_COOKIE['phone'])) echo $_COOKIE['phone'];?>"/>
                    </div>
                    <div class="product_packs">
                        <div class="product_pack1">
                            <p>Main package:</p>
                            <input class="" type="radio" name="product1" value="main_standart"/><strong>Standart</strong><br/>
                            <input class="" type="radio" name="product1" value="main_business"/><strong>Business</strong><br/>
                            <input class="" type="radio" name="product1" value="main_premium"/><strong>Premium</strong><br/>
                            <input class="" type="radio" name="product1" value="main_unlimited"/><strong>Unlimited</strong>
                        </div>
                        <div class="product_pack2">
                            <p>Style package:</p>
                            <input class="" type="radio" name="product2" value="style_standart"/><strong>Standart</strong><br/>
                            <input class="" type="radio" name="product2" value="style_business"/><strong>Business</strong><br/>
                            <input class="" type="radio" name="product2" value="style_premium"/><strong>Premium</strong><br/>
                            <input class="" type="radio" name="product2" value="style_none"/><strong>None</strong><br/>
                        </div>
                    </div>
                    <div class="order">
                        <button class="order_btn" name="order">Order</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
</main>