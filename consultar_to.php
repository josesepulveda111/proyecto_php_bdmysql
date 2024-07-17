<!DOCTYPE html>
<html lang="es" class="a0">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Replace Dyslexia</title>
<meta name="title" content="Startup Tailwind | Startup Web Template for Tailwind CSS" />
<meta name="description" content="Startup Tailwind is a complete Tailwind CSS template crafted specially for SaaS, Software Mobile App and Web App Sites. Comes with all essential components and pages you need to kickstart your SaaS websites." />

<meta property="og:type" content="website" />
<meta property="og:url" content="https://startup-tailwind.preview.uideck.com/" />
<meta property="og:title" content="Startup Tailwind | SaaS Web Template for Tailwind CSS" />
<meta property="og:description" content="Startup Tailwind is a complete Tailwind CSS template crafted specially for SaaS, Software Mobile App and Web App Sites. Comes with all essential components and pages you need to kickstart your SaaS websites." />
<meta property="og:image" content="" />

<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:url" content="https://saas-tailwind.preview.uideck.com/" />
<meta property="twitter:title" content="Startup Tailwind | SaaS Web Template for Tailwind CSS" />
<meta property="twitter:description" content="Startup Tailwind is a complete Tailwind CSS template crafted specially for SaaS, Software Mobile App and Web App Sites. Comes with all essential components and pages you need to kickstart your SaaS websites." />
<meta property="twitter:image" content="" />
<link rel="shortcut icon" href="images/icon1.png" type="image/x-icon" />
<link rel="stylesheet" href="css/animate.css" />
<link rel="stylesheet" href="css/glightbox.min.css" />
<link rel="stylesheet" href="css/tailwind.css" />
<script src="js/wow.min.js"></script>
<script>
      // ===== wow js
      new WOW().init();
    </script>
</head>
<body class="dark:a1">

<header class="
        header
        a2
        a3
        a4
        a5
        a6
        a7
        a8
        a9
      ">
<div class="aa">
<div class="
            a8 ab[-16px] a9 ac ad
          ">
<div class="ae af ag">
<a  class="a7 ah ai header-logo">
<img src="images/Logo_Juan-01.png" alt="logo" class="a7 dark:aj" />
<img src="images/Logo_Juan-01.png" alt="logo" class="a7 aj dark:ah" />
</a>
</div>
<div class="a8 ae ac a9 a7">
<div>
<button id="navbarToggler" aria-label="Mobile Menu" class="
                  ah
                  a3
                  ak
                  al/2
                  am[-50%]
                  lg:aj
                  focus:an
                  ao ap aq[6px] ar
                ">
<span class="
                    ad
                    as[30px]
                    at[2px]
                    au[6px]
                    ah
                    av
                    dark:aw
                  "></span>
<span class="
                    ad
                    as[30px]
                    at[2px]
                    au[6px]
                    ah
                    av
                    dark:aw
                  "></span>
<span class="
                    ad
                    as[30px]
                    at[2px]
                    au[6px]
                    ah
                    av
                    dark:aw
                  "></span>
</button>
<nav id="navbarCollapse" class="
                  a3 ax
                  lg:ay lg:ae
                  xl:az
                  aw
                  dark:av
                  lg:dark:a2 lg:a2
                  aA ar aB[250px] a7
                  lg:ag lg:a7
                  ak aC aj
                  lg:ah lg:aD lg:aE
                ">
<ul class="aF lg:a8">


</ul>
</nav>
</div>

<label for="darkToggler" class="
                    a1r a1s a1t
                    md:a1u md:a1v
                    a1w
                    a8
                    a9
                    a1x
                    a1y
                    dark:a1z
                    a1A
                    dark:aI
                  ">
<input type="checkbox" name="darkToggler" id="darkToggler" class="a1B" aria-label="darkToggler" />


</label>
</div>
</div>
</div>
</div>
</div>
</header>


<section id="home" class="
        ad a1H a1I[120px] a1J[110px]
        md:a1I[150px] md:a1J[120px]
        xl:a1I[180px] xl:a1J[160px]
        2xl:a1I[210px] 2xl:a1J[200px]
      ">
<div class="aa">
        <center>
            <h1 class="title_c">Consulta tu resultado</h1>
            <br>
            <form action="consultar_to.php" method="post">
            
                <input class="camp_doc" type="text" name="doc" placeholder="Documento">
                <input class="btn_busc" type="submit" name="btn_buscar_to" value="Buscar">
                    <br><br>
                    <table border="2" class="tabla">
                        <tr bgcolor="#4A6CF7" class="atributo">
                            <td>Id Respuesta</td>
                            <td>Doc</td>
                            <td>Fecha</td>
                            <td>R1</td>
                            <td>R2</td>
                            <td>R3</td>
                            <td>R4</td>
                            <td>R5</td>
                            <td>R6</td>
                            <td>R7</td>
                            <td>R8</td>
                            <td>R9</td>
                            <td>R10</td>
                            <td>R11</td>
                            <td>R12</td>
                            <td>R13</td>
                            <td>R14</td>
                            <td>R15</td>
                            <td>R16</td>
                            <td>R17</td>
                            <td>R18</td>
                            <td>R19</td>
                            <td>R20</td>
                        </tr>       
                
            </form>
                    <?php
                        if($_POST['btn_buscar_to']){
                            include "conexion.php";
                            
                            $doc = $_POST['doc'];
                            
                            $consultar = mysqli_query($conexion,"SELECT * FROM respuestas_test_o WHERE doc = $doc") or die ($conexion."Problemas en la consulta");
                            
                            while($fila=mysqli_fetch_array($consultar)){
                                ?>
                            
                        
                            <tr bgcolor="white">
                                    <td><?php echo $fila['id_respuesta'];?></td>
                                    <td><?php echo $fila['doc']; ?></td>
                                    <td><?php echo $fila['fecha_pre']; ?></td>
                                    <td>
                                        <?php 
                                            if($fila['r1']==1){
                                                echo "SI";
                                            }else{ 
                                                if($fila['r1']==2){
                                                echo "NO";
                                                }
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            if($fila['r2']==1){
                                                echo "SI";
                                            }else{ 
                                                if($fila['r2']==2){
                                                echo "NO";
                                                }
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            if($fila['r3']==1){
                                                echo "SI";
                                            }else{ 
                                                if($fila['r3']==2){
                                                echo "NO";
                                                }
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            if($fila['r4']==1){
                                                echo "SI";
                                            }else{ 
                                                if($fila['r4']==2){
                                                echo "NO";
                                                }
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            if($fila['r5']==1){
                                                echo "SI";
                                            }else{ 
                                                if($fila['r5']==2){
                                                echo "NO";
                                                }
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            if($fila['r6']==1){
                                                echo "SI";
                                            }else{ 
                                                if($fila['r6']==2){
                                                echo "NO";
                                                }
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            if($fila['r7']==1){
                                                echo "SI";
                                            }else{ 
                                                if($fila['r7']==2){
                                                echo "NO";
                                                }
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            if($fila['r8']==1){
                                                echo "SI";
                                            }else{ 
                                                if($fila['r8']==2){
                                                echo "NO";
                                                }
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            if($fila['r9']==1){
                                                echo "SI";
                                            }else{ 
                                                if($fila['r9']==2){
                                                echo "NO";
                                                }
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            if($fila['r10']==1){
                                                echo "SI";
                                            }else{ 
                                                if($fila['r10']==2){
                                                echo "NO";
                                                }
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            if($fila['r11']==1){
                                                echo "SI";
                                            }else{ 
                                                if($fila['r11']==2){
                                                echo "NO";
                                                }
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            if($fila['r12']==1){
                                                echo "SI";
                                            }else{ 
                                                if($fila['r12']==2){
                                                echo "NO";
                                                }
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            if($fila['r13']==1){
                                                echo "SI";
                                            }else{ 
                                                if($fila['r13']==2){
                                                echo "NO";
                                                }
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            if($fila['r14']==1){
                                                echo "SI";
                                            }else{ 
                                                if($fila['r14']==2){
                                                echo "NO";
                                                }
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            if($fila['r15']==1){
                                                echo "SI";
                                            }else{ 
                                                if($fila['r15']==2){
                                                echo "NO";
                                                }
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            if($fila['r16']==1){
                                                echo "SI";
                                            }else{ 
                                                if($fila['r16']==2){
                                                echo "NO";
                                                }
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            if($fila['r17']==1){
                                                echo "SI";
                                            }else{ 
                                                if($fila['r17']==2){
                                                echo "NO";
                                                }
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            if($fila['r18']==1){
                                                echo "SI";
                                            }else{ 
                                                if($fila['r18']==2){
                                                echo "NO";
                                                }
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            if($fila['r19']==1){
                                                echo "SI";
                                            }else{ 
                                                if($fila['r19']==2){
                                                echo "NO";
                                                }
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            if($fila['r20']==1){
                                                echo "SI";
                                            }else{ 
                                                if($fila['r20']==2){
                                                echo "NO";
                                                }
                                            }
                                        ?>
                                    </td>
                                    
                                    <td><input class="btns" type="submit" value="Modificar"></td>
                                    <td><input class="btns" href="delete.php" type="submit" value="Eliminar"></td>
                                </tr>
                        
                                <?php
                            }
                        }
                        ?>
            
                    </table>
<br>
<br><br>
            <a href="dashboard.php" class="
                  
                  md:ah
                  
                  a1g
                  aI
                  a1k
                  a1i
                  a1l
                  
                  
                  
                  hover:a1n hover:a1o
                  a13 
                  btn_in
                ">
Regresar a inicio
</a>
        </center>
            
</div>

<div class="a3 a4 a_ a1Y[-1]">
<svg width="450" height="556" viewBox="0 0 450 556" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="277" cy="63" r="225" fill="url(#paint0_linear_25:217)" />
<circle cx="17.9997" cy="182" r="18" fill="url(#paint1_radial_25:217)" />
<circle cx="76.9997" cy="288" r="34" fill="url(#paint2_radial_25:217)" />
<circle cx="325.486" cy="302.87" r="180" transform="rotate(-37.6852 325.486 302.87)" fill="url(#paint3_linear_25:217)" />
<circle opacity="0.8" cx="184.521" cy="315.521" r="132.862" transform="rotate(114.874 184.521 315.521)" stroke="url(#paint4_linear_25:217)" />
<circle opacity="0.8" cx="356" cy="290" r="179.5" transform="rotate(-30 356 290)" stroke="url(#paint5_linear_25:217)" />
<circle opacity="0.8" cx="191.659" cy="302.659" r="133.362" transform="rotate(133.319 191.659 302.659)" fill="url(#paint6_linear_25:217)" />
<defs>
<linearGradient id="paint0_linear_25:217" x1="-54.5003" y1="-178" x2="222" y2="288" gradientUnits="userSpaceOnUse">
<stop stop-color="#4A6CF7" />
<stop offset="1" stop-color="#4A6CF7" stop-opacity="0" />
</linearGradient>
<radialGradient id="paint1_radial_25:217" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(17.9997 182) rotate(90) scale(18)">
<stop offset="0.145833" stop-color="#4A6CF7" stop-opacity="0" />
<stop offset="1" stop-color="#4A6CF7" stop-opacity="0.08" />
</radialGradient>
<radialGradient id="paint2_radial_25:217" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(76.9997 288) rotate(90) scale(34)">
<stop offset="0.145833" stop-color="#4A6CF7" stop-opacity="0" />
<stop offset="1" stop-color="#4A6CF7" stop-opacity="0.08" />
</radialGradient>
<linearGradient id="paint3_linear_25:217" x1="226.775" y1="-66.1548" x2="292.157" y2="351.421" gradientUnits="userSpaceOnUse">
<stop stop-color="#4A6CF7" />
<stop offset="1" stop-color="#4A6CF7" stop-opacity="0" />
</linearGradient>
<linearGradient id="paint4_linear_25:217" x1="184.521" y1="182.159" x2="184.521" y2="448.882" gradientUnits="userSpaceOnUse">
<stop stop-color="#4A6CF7" />
<stop offset="1" stop-color="white" stop-opacity="0" />
</linearGradient>
<linearGradient id="paint5_linear_25:217" x1="356" y1="110" x2="356" y2="470" gradientUnits="userSpaceOnUse">
<stop stop-color="#4A6CF7" />
<stop offset="1" stop-color="white" stop-opacity="0" />
</linearGradient>
<linearGradient id="paint6_linear_25:217" x1="118.524" y1="29.2497" x2="166.965" y2="338.63" gradientUnits="userSpaceOnUse">
<stop stop-color="#4A6CF7" />
<stop offset="1" stop-color="#4A6CF7" stop-opacity="0" />
</linearGradient>
</defs>
</svg>
</div>
<div class="a3 a1X a5 a1Y[-1]">
<svg width="364" height="201" viewBox="0 0 364 201" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.88928 72.3303C33.6599 66.4798 101.397 64.9086 150.178 105.427C211.155 156.076 229.59 162.093 264.333 166.607C299.076 171.12 337.718 183.657 362.889 212.24" stroke="url(#paint0_linear_25:218)" />
<path d="M-22.1107 72.3303C5.65989 66.4798 73.3965 64.9086 122.178 105.427C183.155 156.076 201.59 162.093 236.333 166.607C271.076 171.12 309.718 183.657 334.889 212.24" stroke="url(#paint1_linear_25:218)" />
<path d="M-53.1107 72.3303C-25.3401 66.4798 42.3965 64.9086 91.1783 105.427C152.155 156.076 170.59 162.093 205.333 166.607C240.076 171.12 278.718 183.657 303.889 212.24" stroke="url(#paint2_linear_25:218)" />
<path d="M-98.1618 65.0889C-68.1416 60.0601 4.73364 60.4882 56.0734 102.431C120.248 154.86 139.905 161.419 177.137 166.956C214.37 172.493 255.575 186.165 281.856 215.481" stroke="url(#paint3_linear_25:218)" />
<circle opacity="0.8" cx="214.505" cy="60.5054" r="49.7205" transform="rotate(-13.421 214.505 60.5054)" stroke="url(#paint4_linear_25:218)" />
<circle cx="220" cy="63" r="43" fill="url(#paint5_radial_25:218)" />
<defs>
<linearGradient id="paint0_linear_25:218" x1="184.389" y1="69.2405" x2="184.389" y2="212.24" gradientUnits="userSpaceOnUse">
<stop stop-color="#4A6CF7" stop-opacity="0" />
<stop offset="1" stop-color="#4A6CF7" />
</linearGradient>
<linearGradient id="paint1_linear_25:218" x1="156.389" y1="69.2405" x2="156.389" y2="212.24" gradientUnits="userSpaceOnUse">
<stop stop-color="#4A6CF7" stop-opacity="0" />
<stop offset="1" stop-color="#4A6CF7" />
</linearGradient>
<linearGradient id="paint2_linear_25:218" x1="125.389" y1="69.2405" x2="125.389" y2="212.24" gradientUnits="userSpaceOnUse">
<stop stop-color="#4A6CF7" stop-opacity="0" />
<stop offset="1" stop-color="#4A6CF7" />
</linearGradient>
<linearGradient id="paint3_linear_25:218" x1="93.8507" y1="67.2674" x2="89.9278" y2="210.214" gradientUnits="userSpaceOnUse">
<stop stop-color="#4A6CF7" stop-opacity="0" />
<stop offset="1" stop-color="#4A6CF7" />
</linearGradient>
<linearGradient id="paint4_linear_25:218" x1="214.505" y1="10.2849" x2="212.684" y2="99.5816" gradientUnits="userSpaceOnUse">
<stop stop-color="#4A6CF7" />
<stop offset="1" stop-color="#4A6CF7" stop-opacity="0" />
</linearGradient>
<radialGradient id="paint5_radial_25:218" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(220 63) rotate(90) scale(43)">
<stop offset="0.145833" stop-color="white" stop-opacity="0" />
<stop offset="1" stop-color="white" stop-opacity="0.08" />
</radialGradient>
</defs>
</svg>
</div>

</section>

</body>
</html>