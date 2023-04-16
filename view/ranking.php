<div class='containerRank'>
    <div class='cardHeaderRank'>
        <h2>Rank</h2>
    </div>
    <div class='cardRank'>
        <form>
            <div class=cardBodyRank>
                <div class="cardBodyInnerLil">
                    <strong>Rank</strong>
                </div>
                <div class="cardBodyInnerLil">
                    <strong>Pseudo</strong>
                </div>
                <div class="cardBodyInnerLil">
                    <strong>point</strong>
                </div>
                <div class="cardBodyInnerLil">
                    <strong>id</strong>
                </div>
                <div class="cardBodyInnerLil">
                    <strong>pts Perdu</strong>
                </div>
            </div>
            <?php
                $cardBodyInner = ranking();
                $i = 1;
                while( $row = mysqli_fetch_assoc($cardBodyInner)){
                   if($row["role"]!='Pro'){ 
                    echo'
                    <a class="button" href ="index.php?page=profil&id='.$row["id"].'">
                        <div class="hajazayda">
                            <div class="cardBodyInnerLil2">' .$i. ' </div>  
                            <div class="cardBodyInnerLil2">' . $row["pseudo"] . ' </div> 
                            <div class="cardBodyInnerLil2"> '. $row["point"] . ' </div> 
                            <div class="cardBodyInnerLil2">'. $row["id"] . ' </div> 
                            <div class="cardBodyInnerLil2">'. $row["point"] . ' </div> 
                        </div>
                    </a>
                        ';
                        $i++;
                    }
                }
                echo'
                </div>';
            ?>
        </form>
    </div>
</div>