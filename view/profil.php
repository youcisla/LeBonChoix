<div class="momclass">
    <form action="." method="post">
        <div class="firstclass">
            <div class="prof" >
                <a class="thirdclass" href="Location: .">
                    <?php echo getpseudo($_SESSION["id"][0]);?>
                </a>
            </div>
            <div class="secondclass">
                <a class="thirdclass"
                    <?php if ($_SESSION["role"]=='internaute'){ echo'href="index.php?page=modifier"' ;} else{echo'href ="index.php?page=pro-modif"';}  ?>>Modifer</a>
            </div>
            <div class="secondclassSup">
                <input type="hidden" name="action" value="sup_user">
                <input type="submit" value="Supprimer">
            </div>
        </div>
    </form>
</div>