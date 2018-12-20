<?php get_header(); ?>
    <div class="contact_des">
        <h2>Contact<br><span>-お問い合わせ・ご感想-</span></h2>
        <div class="input">
            <p>NAME　<span>-お名前-</span><br>
                <input type="text" placeholder="　お名前（全角）" required></p>
            <p>MAIL　<span>-メールアドレス-</span><br>
                <input type="email" placeholder="　aaa@aaa.aaa(半角英数字)" required></p>
            <p>TYPE　<span>-お問い合わせの種類-<span><br>
                <select name="select" required>
                    <option>お問い合わせ</option>
                    <option>ご感想</option>
                </select>
            </p>
            <p>MESSAGE　<span>-お問い合わせ内容・ご感想-<span><br><textarea name="message" required></textarea></p>
            <p><input type="submit" value="SEND　-送信-"></p>
        </div>
    </div>
<?php get_footer(); ?>