<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bulma.min.css">
    <title>Create A Quiz</title>
</head>
<body>
     
    <div class="container is-fluid">
    <div class="notification">

        <section class="section">
            <div class="container">
                <h1 class="title">Which Ninja Are You?</h1>
                    <h2 class="subtitle">
                        Answer these simple questions to find out which ninja you'd most likely be if you had chakra!
                    </h2>
            </div>
        </section>

    </div>
    </div>

    <form action="/grade.php" method="post" id="quiz">
        <div class="container is-fluid">
            <div class="notification">
                <h1 class="title">Question 1</h1>
                    <h2 class="subtitle">Which style do you prefer?</h2>

                <div class="control">
                    <label for="Q1AnswerA">
                        <input type="radio" name="Q1" id="Q1AnswerA" value="A">
                        Fire Style
                    </label><br>
                    <label for="Q1AnswerB">
                        <input type="radio" name="Q1" id="Q1AnswerB" value="B">
                        Water Style
                    </label><br>
                    <label for="Q1AnswerC">
                        <input type="radio" name="Q1" id="Q1AnswerC" value="C">
                        Earth Style
                    </label><br>
                    <label for="Q1AnswerD">
                        <input type="radio" name="Q1" id="Q1AnswerD" value="D">
                        Wind Style
                    </label>
                </div>
            </div>
        </div>

        <div class="container is-fluid">
            <div class="notification">
                <h1 class="title">Question 2</h1>
                    <h2 class="subtitle">What is your favourite food?</h2>

                <div class="control">
                    <label for="Q2AnswerA">
                        <input type="radio" name="Q2" id="Q2AnswerA" value="A">
                        Anything Spicy
                    </label><br>
                    <label for="Q2AnswerB">
                        <input type="radio" name="Q2" id="Q2AnswerB" value="B">
                        I don't Eat Much
                    </label><br>
                    <label for="Q2AnswerC">
                        <input type="radio" name="Q2" id="Q2AnswerC" value="C">
                        Healthy Foods Rich In vegetables and lean meat
                    </label><br>
                    <label for="Q2AnswerD">
                        <input type="radio" name="Q2" id="Q2AnswerD" value="D">
                        Ramen Noodles
                    </label>
                </div>
            </div>
        </div>

        <div class="container is-fluid">
            <div class="notification">
                <h1 class="title">Question 3</h1>
                    <h2 class="subtitle">Which of the following characteristics  fits your personality the best?</h2>

                <div class="control">
                    <label for="Q3AnswerA">
                        <input type="radio" name="Q3" id="Q3AnswerA" value="A">
                        Perfectionist
                    </label><br>
                    <label for="Q3AnswerB">
                        <input type="radio" name="Q3" id="Q3AnswerB" value="B">
                        Keep cool-headed in any situation
                    </label><br>
                    <label for="Q3AnswerC">
                        <input type="radio" name="Q3" id="Q3AnswerC" value="C">
                        Arrogant
                    </label><br>
                    <label for="Q3AnswerD">
                        <input type="radio" name="Q3" id="Q3AnswerD" value="D">
                        Determined – don’t ever give up,
                    </label>
                </div>
            </div>
        </div>

        <div class="container is-fluid">
            <div class="notification">
                <h1 class="title">Question 4</h1>
                    <h2 class="subtitle">What is your favorite animal?</h2>

                <div class="control">
                    <label for="Q4AnswerA">
                        <input type="radio" name="Q4" id="Q4AnswerA" value="A">
                        Hawk
                    </label><br>
                    <label for="Q4AnswerB">
                        <input type="radio" name="Q4" id="Q4AnswerB" value="B">
                        Dragon
                    </label><br>
                    <label for="Q4AnswerC">
                        <input type="radio" name="Q4" id="Q4AnswerC" value="C">
                        Tiger
                    </label><br>
                    <label for="Q4AnswerD">
                        <input type="radio" name="Q4" id="Q4AnswerD" value="D">
                        Frog
                    </label>
                </div>
            </div>
        </div>

        <div class="container is-fluid">
            <div class="notification">
                <h1 class="title">Question 5</h1>
                    <h2 class="subtitle">What is your usual face expression?</h2>

                <div class="control">
                    <label for="Q5AnswerA">
                        <input type="radio" name="Q5" id="Q5AnswerA" value="A">
                        Neutral
                    </label><br>
                    <label for="Q5AnswerB">
                        <input type="radio" name="Q5" id="Q5AnswerB" value="B">
                        You Frown All The Time
                    </label><br>
                    <label for="Q5AnswerC">
                        <input type="radio" name="Q5" id="Q5AnswerC" value="C">
                        You Hardly Smile
                    </label><br>
                    <label for="Q5AnswerD">
                        <input type="radio" name="Q5" id="Q5AnswerD" value="D">
                        You Smile Alot
                    </label>
                </div>
            </div>
        </div>

        <div class="container is-fluid">
            <div class="notification">
                <h1 class="title">Question 6</h1>
                    <h2 class="subtitle">When in battle, which weapon would you use?</h2>

                <div class="control">
                    <label for="Q6AnswerA">
                        <input type="radio" name="Q6" id="Q6AnswerA" value="A">
                        Katana
                    </label><br>
                    <label for="Q6AnswerB">
                        <input type="radio" name="Q6" id="Q6AnswerB" value="B">
                        Senbon and Shuriken
                    </label><br>
                    <label for="Q6AnswerC">
                        <input type="radio" name="Q6" id="Q6AnswerC" value="C">
                        Fists
                    </label><br>
                    <label for="Q6AnswerD">
                        <input type="radio" name="Q6" id="Q6AnswerD" value="D">
                        Kunai
                    </label>
                </div>
            </div>
        </div>

        <div class="container is-fluid">
            <div class="notification">
                <h1 class="title">Question 7</h1>
                    <h2 class="subtitle">Favourite Color?</h2>

                <div class="control">
                    <label for="Q7AnswerA">
                        <input type="radio" name="Q7" id="Q7AnswerA" value="A">
                        Purple/Indigo
                    </label><br>
                    <label for="Q7AnswerB">
                        <input type="radio" name="Q7" id="Q7AnswerB" value="B">
                        Blue
                    </label><br>
                    <label for="Q7AnswerC">
                        <input type="radio" name="Q7" id="Q7AnswerC" value="C">
                        Brown/Green
                    </label><br>
                    <label for="Q7AnswerD">
                        <input type="radio" name="Q7" id="Q7AnswerD" value="D">
                        Orange
                    </label>
                </div>
            </div>
        </div>

        <div class="container is-fluid">
            <div class="notification">
                <h1 class="title">Question 8</h1>
                    <h2 class="subtitle">Favourite Fighting Style?</h2>

                <div class="control">
                    <label for="Q8AnswerA">
                        <input type="radio" name="Q8" id="Q8AnswerA" value="A">
                        Genjutsu
                    </label><br>
                    <label for="Q8AnswerB">
                        <input type="radio" name="Q8" id="Q8AnswerB" value="B">
                        Ninjutsu
                    </label><br>
                    <label for="Q8AnswerC">
                        <input type="radio" name="Q8" id="Q8AnswerC" value="C">
                        Taijutsu
                    </label><br>
                    <label for="Q8AnswerD">
                        <input type="radio" name="Q8" id="Q8AnswerD" value="D">
                        The Power Of Youth!!!
                    </label>
                </div>
            </div>
        </div>

        <div class="container is-fluid">
            <div class="notification">
                <h1 class="title">Question 9</h1>
                    <h2 class="subtitle">Which Organization do you belong to?</h2>

                <div class="control">
                    <label for="Q9AnswerA">
                        <input type="radio" name="Q9" id="Q9AnswerA" value="A">
                        Akutsuki
                    </label><br>
                    <label for="Q9AnswerB">
                        <input type="radio" name="Q9" id="Q9AnswerB" value="B">
                        Hidden Mist Anbu
                    </label><br>
                    <label for="Q9AnswerC">
                        <input type="radio" name="Q9" id="Q9AnswerC" value="C">
                        Tsuchikage's Group
                    </label><br>
                    <label for="Q9AnswerD">
                        <input type="radio" name="Q9" id="Q9AnswerD" value="D">
                        Hidden Leaf Village
                    </label>
                </div>
            </div>
        </div>

        <div class="container is-fluid">
            <div class="notification">
                <h1 class="title">Question 10</h1>
                    <h2 class="subtitle">When in a group which position are you usually in?</h2>

                <div class="control">
                    <label for="Q10AnswerA">
                        <input type="radio" name="Q10" id="Q10AnswerA" value="A">
                        Leader
                    </label><br>
                    <label for="Q10AnswerB">
                        <input type="radio" name="Q10" id="Q10AnswerB" value="B">
                        I can be a better leader( but is actually second in command)
                    </label><br>
                    <label for="Q10AnswerC">
                        <input type="radio" name="Q10" id="Q10AnswerC" value="C">
                        Member
                    </label><br>
                    <label for="Q10AnswerD">
                        <input type="radio" name="Q10" id="Q10AnswerD" value="D">
                        Newbie
                    </label>
                </div>
            </div>
        </div>

        <div class="container is-fluid">
            <div class="notification">
                <h1 class="title">Question 11</h1>
                    <h2 class="subtitle">Whats Your Motivation?</h2>

                <div class="control">
                    <label for="Q11AnswerA">
                        <input type="radio" name="Q11" id="Q11AnswerA" value="A">
                        Brother/Sister
                    </label><br>
                    <label for="Q11AnswerB">
                        <input type="radio" name="Q11" id="Q11AnswerB" value="B">
                        My Abilities
                    </label><br>
                    <label for="Q11AnswerC">
                        <input type="radio" name="Q11" id="Q11AnswerC" value="C">
                        Proving Something
                    </label><br>
                    <label for="Q11AnswerD">
                        <input type="radio" name="Q11" id="Q11AnswerD" value="D">
                        Friends
                    </label>
                </div>
            </div>
        </div>

        <div class="container is-fluid">
            <div class="notification">
                <h1 class="title">Question 12</h1>
                    <h2 class="subtitle">Choose a drink</h2>

                <div class="control">
                    <label for="Q12AnswerA">
                        <input type="radio" name="Q12" id="Q12AnswerA" value="A">
                        Tea
                    </label><br>
                    <label for="Q12AnswerB">
                        <input type="radio" name="Q12" id="Q12AnswerB" value="B">
                        Water
                    </label><br>
                    <label for="Q12AnswerC">
                        <input type="radio" name="Q12" id="Q12AnswerC" value="C">
                        Coffeee
                    </label><br>
                    <label for="Q12AnswerD">
                        <input type="radio" name="Q12" id="Q12AnswerD" value="D">
                        Soda
                    </label>
                </div>
            </div>
        </div>

        <div class="container is-fluid">
            <div class="notification">
                <h1 class="title">Question 13</h1>
                    <h2 class="subtitle">Which Pokemon would you choose?</h2>

                <div class="control">
                    <label for="Q13AnswerA">
                        <input type="radio" name="Q13" id="Q13AnswerA" value="A">
                        Charmander
                    </label><br>
                    <label for="Q13AnswerB">
                        <input type="radio" name="Q13" id="Q13AnswerB" value="B">
                        Squirtle 
                    </label><br>
                    <label for="Q13AnswerC">
                        <input type="radio" name="Q13" id="Q13AnswerC" value="C">
                        Bulbasaur
                    </label><br>
                    <label for="Q13AnswerD">
                        <input type="radio" name="Q13" id="Q13AnswerD" value="D">
                        Pikachu
                    </label>
                </div>
            </div>
        </div>

        <div class="container is-fluid">
            <div class="notification">
                <h1 class="title">Question 14</h1>
                    <h2 class="subtitle">What Is Your Favourite Flower?</h2>

                <div class="control">
                    <label for="Q14AnswerA">
                        <input type="radio" name="Q14" id="Q14AnswerA" value="A">
                        Flame Tips
                    </label><br>
                    <label for="Q14AnswerB">
                        <input type="radio" name="Q14" id="Q14AnswerB" value="B">
                        Aloe Vera
                    </label><br>
                    <label for="Q14AnswerC">
                        <input type="radio" name="Q14" id="Q14AnswerC" value="C">
                        Cactus Flowers
                    </label><br>
                    <label for="Q14AnswerD">
                        <input type="radio" name="Q14" id="Q14AnswerD" value="D">
                        Cherry Blossoms
                    </label>
                </div>
            </div>
        </div>

        <div class="container is-fluid">
            <div class="notification">
                <h1 class="title">Question 15</h1>
                    <h2 class="subtitle">Lets take a look into your locker, is it</h2>

                <div class="control">
                    <label for="Q15AnswerA">
                        <input type="radio" name="Q15" id="Q15AnswerA" value="A">
                        Neat And Tidy
                    </label><br>
                    <label for="Q15AnswerB">
                        <input type="radio" name="Q15" id="Q15AnswerB" value="B">
                        Empty/Minimal
                    </label><br>
                    <label for="Q15AnswerC">
                        <input type="radio" name="Q15" id="Q15AnswerC" value="C">
                        Lots Of Pictures
                    </label><br>
                    <label for="Q15AnswerD">
                        <input type="radio" name="Q15" id="Q15AnswerD" value="D">
                        Messy
                    </label>
                </div>
            </div>
        </div>

        <div class="container is-fluid">
            <div class="notification">
                <h1 class="title">Question 16</h1>
                    <h2 class="subtitle">If by some miracle you were to retire from being a ninja, what battle related ailment would you complain about?</h2>

                <div class="control">
                    <label for="Q16AnswerA">
                        <input type="radio" name="Q16" id="Q16AnswerA" value="A">
                        Blindness or Really Horrible Vision
                    </label><br>
                    <label for="Q16AnswerB">
                        <input type="radio" name="Q16" id="Q16AnswerB" value="B">
                        Paralyzed From Waste Down
                    </label><br>
                    <label for="Q16AnswerC">
                        <input type="radio" name="Q16" id="Q16AnswerC" value="C">
                        Back Problems
                    </label><br>
                    <label for="Q16AnswerD">
                        <input type="radio" name="Q16" id="Q16AnswerD" value="D">
                        Carpel Tunnel
                    </label>
                </div>
            </div>
        </div>

        <div class="container is-fluid">
            <div class="notification">
                <h1 class="title">Question 17</h1>
                    <h2 class="subtitle">You are walking through the woods and the enemy surrounds and attacks you, what do you do?</h2>

                <div class="control">
                    <label for="Q17AnswerA">
                        <input type="radio" name="Q17" id="Q17AnswerA" value="A">
                        I kill them all with my special ability
                    </label><br>
                    <label for="Q17AnswerB">
                        <input type="radio" name="Q17" id="Q17AnswerB" value="B">
                        I quickly attack, but they're too slow to fight back!
                    </label><br>
                    <label for="Q17AnswerC">
                        <input type="radio" name="Q17" id="Q17AnswerC" value="C">
                        *Still in shock*
                    </label><br>
                    <label for="Q17AnswerD">
                        <input type="radio" name="Q17" id="Q17AnswerD" value="D">
                        That wasn't me, It was a clone. I attack from above.
                    </label>
                </div>
            </div>
        </div>

        <div class="container is-fluid">
            <div class="notification">
                <h1 class="title">Question 18</h1>
                    <h2 class="subtitle">What would you rate your intelligence?</h2>

                <div class="control">
                    <label for="Q18AnswerA">
                        <input type="radio" name="Q18" id="Q18AnswerA" value="A">
                        9/10
                    </label><br>
                    <label for="Q18AnswerB">
                        <input type="radio" name="Q18" id="Q18AnswerB" value="B">
                        8/10
                    </label><br>
                    <label for="Q18AnswerC">
                        <input type="radio" name="Q18" id="Q18AnswerC" value="C">
                        Overwhelming
                    </label><br>
                    <label for="Q18AnswerD">
                        <input type="radio" name="Q18" id="Q18AnswerD" value="D">
                        3/10
                    </label>
                </div>
            </div>
        </div>

        <div class="container is-fluid">
            <div class="notification">
                <h1 class="title">Question 19</h1>
                    <h2 class="subtitle">Clothing Style?</h2>

                <div class="control">
                    <label for="Q19AnswerA" >
                        <input type="radio" name="Q19" id="Q19AnswerA" value="A">
                        Red Clouds Robe
                    </label><br>
                    <label for="Q19AnswerB">
                        <input type="radio" name="Q19" id="Q19AnswerB" value="B">
                        Anbu Mask
                    </label><br>
                    <label for="Q19AnswerC">
                        <input type="radio" name="Q19" id="Q19AnswerC" value="C">
                        Chunin Armor
                    </label><br>
                    <label for="Q19AnswerD">
                        <input type="radio" name="Q19" id="Q19AnswerD" value="D">
                        Hokage Robe
                    </label>
                </div>
            </div>
        </div>

        <div class="container is-fluid">
            <div class="notification">
                <h1 class="title">Question 20</h1>
                    <h2 class="subtitle">I do not like that I am...</h2>

                <div class="control">
                    <label for="Q20AnswerA">
                        <input type="radio" name="Q20" id="Q20AnswerA" value="A">
                        Critical
                    </label><br>
                    <label for="Q20AnswerB">
                        <input type="radio" name="Q20" id="Q20AnswerB" value="B">
                        Cynical
                    </label><br>
                    <label for="Q20AnswerC">
                        <input type="radio" name="Q20" id="Q20AnswerC" value="C">
                        Perverted
                    </label><br>
                    <label for="Q20AnswerD">
                        <input type="radio" name="Q20" id="Q20AnswerD" value="D">
                        Stubborn
                    </label><br><br>

                    <input class="button is-success is-rounded" type="submit" value="Submit input">
                </div>
            </div>
        </div>
    </form>
</body>
</html>