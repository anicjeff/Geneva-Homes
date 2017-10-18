<?php include("includes/nav.php"); ?>
<main class="mdl-layout__content">
    <div class="site-content">
        <div class="mdl-grid site-max-width">
            <div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--4dp page-content">
                <div class="mdl-card__title">
                    <h1 class="mdl-card__title-text"></h1>
                </div>
                <div class="mdl-card__media"><img class="article-image" src="./img/contactus.png" border="0" alt="Contact">
                </div>
                <div class="mdl-grid site-copy">
                    <div class="mdl-cell mdl-cell--12-col"><div class="mdl-card__supporting-text">
                        <p>Please reach out to us for any questions or concerns. You can reach us by phone, email, or fill out the form below to send us a message.</p>
                        <br>
                        <div class="containercon">
                            <a href="tel:+15555555555"><i class="material-icons">phone_in_talk</i> 1 555 555 5555</a>
                            <a href="mailto:edit@me.com"><i class="material-icons">mail_outline</i> edit@me.com</a></br>
                        </div><hr>
                        <form action="https://formspree.io/anicjeff@gmail.com" method="POST" class="form-contact">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="Name" name="name">
                                <label class="mdl-textfield__label" for="Name">Name...</label>
                                <span class="mdl-textfield__error">Letters and spaces only</span>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="Email" name="_replyto">
                                <label class="mdl-textfield__label" for="Email">Email...</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <textarea class="mdl-textfield__input" type="text" rows="5" id="note" name="message"></textarea>
                                <label class="mdl-textfield__label" for="note">Enter note</label>
                            </div>
                            <p>
                                <button class="redbtn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" type="submit">
                                    Submit
                                </button>
                            </p>
                        </form>
                    </div></div>
                </div>
            </div>
        </div>
    </div>
    <?php include("includes/footer.php"); ?>
