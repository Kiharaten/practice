<div id="new_user">
    <h2>会員情報入力</h2>
    <form action="./index.php" method="post">

        <div>
            <label for="nickname">ニックネーム</label>
            <span class="form-require">必須</span>
            <input type="text" value="" name="nickname" placeholder="氏名 名前" class="input-default">
        </div>

        <div class="form-group">
            <label for="email">メールアドレス</label>
            <span class="form-require">必須</span>
            <input type="email" value="" name="email" placeholder="PC・携帯どちらでも可" class="input-default">
        </div>



        <div class="form-group form-password-revelation">
            <label for="password">パスワード</label>
            <span class="form-require">必須</span>
            <input type="password" name="password" placeholder="7文字以上の半角英数字" class="input-default">
            <p class="form-info-text">
                ※ 英字と数字の両方を含めて設定してください
            </p>
            <div class="form-password-revelation-toggle">
                <div class="checkbox-default">
                    <input type="checkbox" id="reveal_password">
                    <i class="icon-check"></i>
                    <label for="reveal_password">パスワードを表示する</label>
                </div>
                <div class="form-password-revelation-revealed-password-container">
                    <span class="form-password-revelation-revealed-password"></span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <h3 class="text-left l-chapter-sub-head">本人確認</h3>
        </div>

        <div class="form-group">
            <div>
                <label>お名前(全角)</label>
                <span class="form-require">必須</span>
            </div>
            <input type="text" value="" name="family_name_kanji" placeholder="例) 山田" class="input-default half">
            <input type="text" value="" name="first_name_kanji" placeholder="例) 彩" class="input-default half">
        </div>

        <div class="form-group">
            <div>
                <label for="family_name_kanji">お名前カナ(全角)</label>
                <span class="form-require">必須</span>
            </div>
            <input type="text" value="" name="family_name_kana" placeholder="例) ヤマダ" class="input-default half">
            <input type="text" value="" name="first_name_kana" placeholder="例) アヤ" class="input-default half">
        </div>

        <div class="form-group">
            <label for="birthday">生年月日</label>
            <span class="form-require">必須</span>
            <br>
            <div class="birthday-select-wrap">
                <div class="select-wrap">
                    <i class="icon-arrow-bottom"></i>
                    <select name="year" class="select-default">
                        <option value="">--</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                        <option value="1999">1999</option>
                        <option value="1998">1998</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>
                        <option value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987</option>
                        <option value="1986">1986</option>
                        <option value="1985">1985</option>
                        <option value="1984">1984</option>
                        <option value="1983">1983</option>
                        <option value="1982">1982</option>
                        <option value="1981">1981</option>
                        <option value="1980">1980</option>
                        <option value="1979">1979</option>
                        <option value="1978">1978</option>
                        <option value="1977">1977</option>
                        <option value="1976">1976</option>
                        <option value="1975">1975</option>
                        <option value="1974">1974</option>
                        <option value="1973">1973</option>
                        <option value="1972">1972</option>
                        <option value="1971">1971</option>
                        <option value="1970">1970</option>
                        <option value="1969">1969</option>
                        <option value="1968">1968</option>
                        <option value="1967">1967</option>
                        <option value="1966">1966</option>
                        <option value="1965">1965</option>
                        <option value="1964">1964</option>
                        <option value="1963">1963</option>
                        <option value="1962">1962</option>
                        <option value="1961">1961</option>
                        <option value="1960">1960</option>
                        <option value="1959">1959</option>
                        <option value="1958">1958</option>
                        <option value="1957">1957</option>
                        <option value="1956">1956</option>
                        <option value="1955">1955</option>
                        <option value="1954">1954</option>
                        <option value="1953">1953</option>
                        <option value="1952">1952</option>
                        <option value="1951">1951</option>
                        <option value="1950">1950</option>
                        <option value="1949">1949</option>
                        <option value="1948">1948</option>
                        <option value="1947">1947</option>
                        <option value="1946">1946</option>
                        <option value="1945">1945</option>
                        <option value="1944">1944</option>
                        <option value="1943">1943</option>
                        <option value="1942">1942</option>
                        <option value="1941">1941</option>
                        <option value="1940">1940</option>
                        <option value="1939">1939</option>
                        <option value="1938">1938</option>
                        <option value="1937">1937</option>
                        <option value="1936">1936</option>
                        <option value="1935">1935</option>
                        <option value="1934">1934</option>
                        <option value="1933">1933</option>
                        <option value="1932">1932</option>
                        <option value="1931">1931</option>
                        <option value="1930">1930</option>
                        <option value="1929">1929</option>
                        <option value="1928">1928</option>
                        <option value="1927">1927</option>
                        <option value="1926">1926</option>
                        <option value="1925">1925</option>
                        <option value="1924">1924</option>
                        <option value="1923">1923</option>
                        <option value="1922">1922</option>
                        <option value="1921">1921</option>
                        <option value="1920">1920</option>
                        <option value="1919">1919</option>
                        <option value="1918">1918</option>
                        <option value="1917">1917</option>
                        <option value="1916">1916</option>
                        <option value="1915">1915</option>
                        <option value="1914">1914</option>
                        <option value="1913">1913</option>
                        <option value="1912">1912</option>
                        <option value="1911">1911</option>
                        <option value="1910">1910</option>
                        <option value="1909">1909</option>
                        <option value="1908">1908</option>
                        <option value="1907">1907</option>
                        <option value="1906">1906</option>
                        <option value="1905">1905</option>
                        <option value="1904">1904</option>
                        <option value="1903">1903</option>
                        <option value="1902">1902</option>
                        <option value="1901">1901</option>
                        <option value="1900">1900</option>
                    </select>
                </div>
                <span>年</span>
                <div class="select-wrap select-wrap__month">
                    <i class="icon-arrow-bottom"></i>
                    <select name="month" class="select-default">
                        <option value="">--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                </div>
                <span>月</span>
                <div class="select-wrap select-wrap__day">
                    <i class="icon-arrow-bottom"></i>
                    <select name="day" class="select-default">
                        <option value="">--</option>
                    </select>
                </div>
                <span>日</span>
            </div>
            <input type="hidden" name="birthday" value="">
            <div class="clearfix">
            </div>
        </div>

        <p class="form-info-text">
            ※ 本人情報は正しく入力してください。会員登録後、修正するにはお時間を頂く場合があります。
        </p>
        <div class="l-single-content">
            <input type="hidden" value="" name="after_save_callback">


            <button type="submit" class="btn-default btn-red">次へ進む</button>
    </form>
</div>