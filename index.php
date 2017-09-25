<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <title> Playing with some cards </title>
        <link href="css/styles.css" rel ="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"> 
    </head>
    <body>
        <header>
            <h1> My cards </h1>
            <h2> These are my favorite yugioh cards </h2>
        </header>
        <nav>
            <hr width="50%" />
            <a id="current" href="index.html"><strong>Main page</strong></a>
        </nav>
        
        <br /><br />
        
        <main>
            <div>
                
                <?php
                    $selectedcard;
                    $deck = [];
                    
                    
                    
                    for ($i = 0; $i < 12; $i ++)
                    {
                        $deck[] = $i;
                    }
                    
                     $decksize = sizeOf($deck);
                    
                    
                    
                    for ($i = 0; $i < $decksize; $i ++)
                    {
                        echo "<img id='reel$i' src='img/$i.png' alt='$i' title='$i' width='240' />";
                    }
                    
                
                    echo "<br /> That is too many cards.  Lets get rid of a few <br />";
                
                    $numbertodiscard = rand(4,8);
                    
                    
                    $selectedcard = rand(0, $decksize - 1);
                    
                    for ($i = 0; $i < $numbertodiscard; $i ++)
                    {
                        $selectedcard = rand(0, $decksize - 1);
                        array_splice($deck, $selectedcard, 1);
                        $decksize = sizeOf($deck);
                    }
                    
                    
                    for ($i = 0; $i < $decksize; $i ++)
                    {
                        echo "<img id='reel$i' src='img/$i.png' alt='$i' title='$i' width='200' />";
                    }
                
                
                
                    echo "<br /> Let's shuffle the cards! <br />";


                    $imageSize;
                    
                    shuffle($deck);
                    
                    for ($i = 0; $i < $decksize; $i ++)
                    {
                        $imageSize = rand(100, 300);
                        $selectedcard = $deck[$i];
                        echo "<img id='reel$selectedcard' src='img/$selectedcard.png' alt='$selectedcard' title='$selectedcard' width='$imageSize' />";
                    }
                
                echo "<br />";
                
                echo "<br /> Now lets pick up a random card from the remaining cards and describe it <br />";
                $selectedcard = rand(0, $decksize - 1);
                
                //echo "$decksize";
                
                $cardnumber = $deck[$selectedcard];
                
                //echo "$cardnumber";
                
                echo "<img id='reel$cardnumber' src='img/$cardnumber.png' alt='$cardnumber' title='$cardnumber' width='240' />";
                echo "<br />";
                switch($cardnumber)
                {
                    case 0:
                        echo "The name of the card is Gagagigo";
                        break;
                    case 1:
                        echo "The name of the card is Darkness Neosphere";
                        break;
                    case 2:
                        echo "The name of the card is Destiny HERO - Plasma";
                        break;
                    case 3:
                        echo "The name of the card is Diabound Kernel";
                        break;
                    case 4:
                        echo "The name of the card is Exodius The Ultimate Forbidden Lord";
                        break;
                    case 5:
                        echo "The name of the card is Kuriboh";
                        break;
                    case 6:
                        echo "The name of the card is The Legendary Exodia Incarnate";
                        break;
                    case 7:
                        echo "The name of the card is Raviel, Lord of Phantasms";
                        break;
                    case 8:
                        echo "The name of the card is Number 54: Lion Heart";
                        break;
                    case 9:
                        echo "The name of the card is Number 95: Galaxy-Eyes Dark Matter Dragon";
                        break;
                    case 10:
                        echo "The name of the card is Number F0: Utopic Future";
                        break;
                    case 11:
                        echo "The name of the card is Neo Blue-Eyes Ultimate Dragon";
                        break;
                }
                echo "<br />";
                if ($cardnumber < 8)
                {
                    echo "This is a regular deck monster";
                }
                else {
                    echo "This is an extra deck monster";
                }
                
                ?>
                
            </div>
            

        </main>
        <footer>
            <hr>
             CST 336 Internet Programming. 2017&copy; Murphy <br />
             <figure>
                <img src="img/csumb_logo.jpg" alt="CSUMB" />
            </figure>
        </footer>
        
    </body>

</html>