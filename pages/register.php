<?php
session_start();
$name = $_SESSION["inputsValues"]["name"]?? "";
$surname = $_SESSION["inputsValues"]["surname"]?? "";
$telefono = $_SESSION["inputsValues"]["telefono"]?? "";
$mail = $_SESSION["inputsValues"]["mail"]?? "";
 ?>

<body>
    <div class="contenedor"> <!-- Contenedor principal -->
          <main>
          <?php if (!empty($_SESSION["errores"])): ?>


                <div class="alert alert-danger">
                  <?php foreach ($_SESSION["errores"] as $value): ?>
                    <p><?php echo $value; ?></p>
                  <?php endforeach ?>
                </div>

              <?php endif ?>
          <?php unset($_SESSION["errores"]) ?>
          <form class="registro" action="?pagina=register.controller" method="post" enctype="multipart/form-data">
          <!--Datos registro-->
          <input type="text" class="form-control" placeholder="Nombre" name="name" id="name" value=""><br>
          <input type="text" class="form-control" placeholder="Apellido" name="surname" id="surname" value=""><br>
          <input type="text" class="form-control" placeholder="Telefono" name="telefono" id="telefono" value=""><br>
          <input type="text"class="form-control" placeholder="Mail" name="mail" id="mail" value=""><br>
          <input type="password" class="form-control" placeholder="Contraseña" name="password" id="password" value=""><br>

           <!-- DIA DE NACIMIENTO-->
              <select name=birth-day class= "form-control">
                <option value="">Día</value>
                <option value="1">1</value>
                <option value="2">2</value>
                <option value="3">3</value>
                <option value="4">4</value>
                <option value="5">5</value>
                <option value="6">6</value>
                <option value="7">7</value>
                <option value="8">8</value>
                <option value="9">9</value>
                <option value="10">10</value>
                <option value="11">11</value>
                <option value="12">12</value>
                <option value="13">13</value>
                <option value="14">14</value>
                <option value="15">15</value>
                <option value="16">16</value>
                <option value="17">17</value>
                <option value="18">18</value>
                <option value="19">19</value>
                <option value="20">20</value>
                <option value="21">21</value>
                <option value="22">22</value>
                <option value="23">23</value>
                <option value="24">24</value>
                <option value="25">25</value>
                <option value="26">26</value>
                <option value="27">27</value>
                <option value="28">28</value>
                <option value="29">29</value>
                <option value="30">30</value>
                <option value="31">31</value>
                </select>
          <!--MES DE NACIMIENTO-->
                <select name=birth-month class= "form-control">
                  <option value="">Mes</value>
                  <option value="Enero">Enero</value>
                  <option value="Febrero">Febrero</value>
                  <option value="Marzo">Marzo</value>
                  <option value="Abril">Abril</value>
                  <option value="Mayo">Mayo</value>
                  <option value="Junio">Junio</value>
                  <option value="Julio">Julio</value>
                  <option value="Agosto">Agosto</value>
                  <option value="Septiembre">Septiembre</value>
                  <option value="Octubre">Octubre</value>
                  <option value="Noviembre">Noviembre</value>
                  <option value="Diciembre">Diciembre</value>
                  </select>
          <!--FECHA DE NACIMIENTO-->
                <select name="birth-year" class= "form-control">
                <option value="año">Año</option>
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
            </select>
              <br>
              <p class="mujer">Mujer<input type="radio" name="mujer"></p>
              <p class="hombre">Hombre<input type="radio" name="hombre"></p>
<!--agregado-->
              <div class="form-group">
                                  <label for="avatar" class="fotoPerfil">Foto de Perfil: </label><br/>
                                  <input type="file" class="form-control" name="avatar" id="avatar" value="" />
                                  <span class="help-block"></span>
              </div>
<!--agregado-->
              <input type="submit" class="btn btn-default" name="enviador" value="Crear cuenta" >
            </form>
        </main>
    </section>
</div>
  </body>
  <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
