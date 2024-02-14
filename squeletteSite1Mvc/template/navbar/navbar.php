<?php
ob_start();
global $conn;
?>

<div id="buttonBox">

    <a class="button" href="p1">Prestation/Partenaires</a>

    <a class="button" href="p2">Nous</a>

    <a class="button" href="p3">Contact</a>


</div>


<!-- début menu déroulant pour petitcss responsive -->

<div class="buttonBox">
    <div class="dropdown">
        <button class="bloc-top">
					<span class="deroulButton">
						<img class="deroulImg" src="../public/img/menu-btn.png">
					</span>
        </button>
        <div class="bloc-links">
            <ul>
                <li>
                    <a class="buttonNew" href="home">Home</a>
                </li>
                <li>
                    <a class="buttonNew" href="p1">Prestation/Partenaires</a>
                </li>
                <li>
                    <a class="buttonNew" href="p2">Nous</a>
                </li>
                <li>
                    <a class="buttonNew" href="p3">Contact</a>
                </li>
            </ul>
        </div>
    </div>

    <script type="text/javascript">
        const dropdown = document.querySelector(".dropdown")
        const btnDrop = document.querySelector(".bloc-top")

        let toggleIndex = 0;

        btnDrop.addEventListener('click', () => {

            if (toggleIndex === 0) {
                dropdown.style.height = dropdown.scrollHeight + "px";
                toggleIndex++;
            } else {
                dropdown.style.height = btnDrop.scrollHeight + "px";
                toggleIndex--;
            }

        })

    </script>

    <!-- fin menu déroulant pour petitcss responsive -->


    <header>

        <a class="logoButton" href="home">
            <img class="logoHeader" src="../public/img/AlkudevLogoLD.png">
        </a>

    </header>