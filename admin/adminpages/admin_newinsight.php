

<div class="container">

<p class="content-top__head--headtitle"><?php echo $requested_page_title; ?></p>

    <div class="content content__column">

        

        <form action="" method="get" class="form__newinsight">

            <div class="form__newinsight--container">
                <p class="form__newinsight--headtitle">Insight Title</p>
                <input type="text" class="form__newinsight--title" name="insight-title">
            </div>

            <div class="form__newinsight--container form__newinsight--container--middle">
                
                <div class="form__newinsight--container--middle--left">
                    <p class="form__newinsight--headtitle">Insight Date</p>
                    <input type="date" class="form__newinsight--date" name="insight-date">
                </div>

                <div class="form__newinsight--container--middle--right">
                    <p class="form__newinsight--headtitle">Insight Keywords</p>
                    <input   type="text" class="form__newinsight--keywords" name="insight-kwords">
                </div>

            </div>

            <div class="form__newinsight--container">
                <p class="form__newinsight--headtitle">Insight Article</p>
                <textarea name="messagebox" class="contact-container__messagebox" placeholder="Your Article Text"></textarea>
                <input type="submit" value="upload">
            </div>

            <input type="submit" value="Submit">

        </form>

    </div>

</div>