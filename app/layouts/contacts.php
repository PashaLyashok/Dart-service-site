<main class="main">
    <div class="container_main">
        <section class="contact">
            <div class="container_contact">
                <h2>Contact Us</h2>
                <hr/>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam iusto similique accusantium nam dignissimos alias magnam?</p>
                <div class="contacts_items">
                    <div class="contacts_item">
                        <p><span>Email :</span>  test.company@hmail.com</p>
                        <p><span>Phone :</span>  +37533*******</p>
                        <p><span>Address :</span>  Minsk, Belarus</p>
                    </div>
                    <div class="contacts_item">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d37650.93759466678!2d27.6111343!3d53.85738309999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sby!4v1613986910216!5m2!1sru!2sby" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <h2 class="feed">Feed Back</h2>
                <hr/>
                <form class="contact_form" method="POST">
                    <div class="container_input">
                        <input required class="main" type="text" placeholder="First Name" name="firstname" value="<?php if(isset($_COOKIE['firstname'])) echo $_COOKIE['firstname'];?>" required />
                        <input class="main" type="text" placeholder="Last Name" name="lastname" value="<?php if(isset($_COOKIE['lastname'])) echo $_COOKIE['lastname'];?>" required />
                        <input class="main" type="email" placeholder="Email" name="email" value="<?php if(isset($_COOKIE['email'])) echo $_COOKIE['email'];?>" required />
                        <input class="main" type="phone" placeholder="Phone" name="phone" value="<?php if(isset($_COOKIE['phone'])) echo $_COOKIE['phone'];?>" required />
                    </div>
                    <textarea cols="10" rows="5" placeholder="Message" name="message" required></textarea>
                    <div class="container_check">
                        <input class="box" type="checkbox" name="input"/>
                        <label for="input">subscribe to the newsletter</label>
                        <button class="order_btn" name="send">send</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
</main>