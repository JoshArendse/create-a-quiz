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

    <form action="grade.php" method="post" id="quiz">
        <div class="container is-fluid">
            <div class="notification">
                <h1 class="title">Question 1</h1>
                    <h2 class="subtitle">Which style do you prefer?</h2>

                <div class="control">
                    <label for="Q1AnswerA" class="forwardA">
                        <input type="radio" name="Q1" type="Q1AnswerA" value="A">
                        Fire Style
                    </label><br>
                    <label for="Q1AnswerB" class="forwardB">
                        <input type="radio" name="Q1" type="Q1AnswerB" value="B">
                        Water Style
                    </label><br>
                    <label for="Q1AnswerC" class="forwardC">
                        <input type="radio" name="Q1" type="Q1AnswerC" value="C">
                        Earth Style
                    </label><br>
                    <label for="Q1AnswerD" class="forwardD">
                        <input type="radio" name="Q1" type="Q1AnswerD" value="D">
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
                    <label for="Q2AnswerA" class="forwardA">
                        <input type="radio" name="Q2">
                        Anything Spicy
                    </label><br>
                    <label for="Q2AnswerB">
                        <input type="radio" name="Q2">
                        I don't Eat Much
                    </label><br>
                    <label for="Q2AnswerC">
                        <input type="radio" name="Q2">
                        Healthy Foods Rich In vegetables and lean meat
                    </label><br>
                    <label for="Q2AnswerD">
                        <input type="radio" name="Q2">
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
                    <label for="Q3AnswerA" class="forwardA">
                        <input type="radio" name="Q3">
                        Perfectionist
                    </label><br>
                    <label for="Q3AnswerB">
                        <input type="radio" name="Q3">
                        Keep cool-headed in any situation
                    </label><br>
                    <label for="Q3AnswerC">
                        <input type="radio" name="Q3">
                        Arrogant
                    </label><br>
                    <label for="Q3AnswerD">
                        <input type="radio" name="Q3">
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
                    <label for="Q4AnswerA" class="forwardA">
                        <input type="radio" name="Q4">
                        Hawk
                    </label><br>
                    <label for="Q4AnswerB">
                        <input type="radio" name="Q4">
                        Dragon
                    </label><br>
                    <label for="Q4AnswerC">
                        <input type="radio" name="Q4">
                        Tiger
                    </label><br>
                    <label for="Q4AnswerD">
                        <input type="radio" name="Q4">
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
                    <label for="Q5AnswerA" class="forwardA">
                        <input type="radio" name="Q5">
                        Neutral
                    </label><br>
                    <label for="Q5AnswerB">
                        <input type="radio" name="Q5">
                        You Frown All The Time
                    </label><br>
                    <label for="Q5AnswerC">
                        <input type="radio" name="Q5">
                        You Hardly Smile
                    </label><br>
                    <label for="Q5AnswerD">
                        <input type="radio" name="Q5">
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
                    <label for="Q6AnswerA" class="forwardA">
                        <input type="radio" name="Q6">
                        Katana
                    </label><br>
                    <label for="Q6AnswerB">
                        <input type="radio" name="Q6">
                        Senbon and Shuriken
                    </label><br>
                    <label for="Q6AnswerC">
                        <input type="radio" name="Q6">
                        Fists
                    </label><br>
                    <label for="Q6AnswerD">
                        <input type="radio" name="Q6">
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
                    <label for="Q7AnswerA" class="forwardA">
                        <input type="radio" name="Q7">
                        Purple/Indigo
                    </label><br>
                    <label for="Q7AnswerB">
                        <input type="radio" name="Q7">
                        Blue
                    </label><br>
                    <label for="Q7AnswerC">
                        <input type="radio" name="Q7">
                        Brown/Green
                    </label><br>
                    <label for="Q7AnswerD">
                        <input type="radio" name="Q7">
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
                    <label for="Q8AnswerA" class="forwardA">
                        <input type="radio" name="Q8">
                        Genjutsu
                    </label><br>
                    <label for="Q8AnswerB">
                        <input type="radio" name="Q8">
                        Ninjutsu
                    </label><br>
                    <label for="Q8AnswerC">
                        <input type="radio" name="Q8">
                        Taijutsu
                    </label><br>
                    <label for="Q8AnswerD">
                        <input type="radio" name="Q8">
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
                    <label for="Q9AnswerA" class="forwardA">
                        <input type="radio" name="Q9">
                        Akutsuki
                    </label><br>
                    <label for="Q9AnswerB">
                        <input type="radio" name="Q9">
                        Hidden Mist Anbu
                    </label><br>
                    <label for="Q9AnswerC">
                        <input type="radio" name="Q9">
                        Tsuchikage's Group
                    </label><br>
                    <label for="Q9AnswerD">
                        <input type="radio" name="Q9">
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
                    <label for="Q10AnswerA" class="forwardA">
                        <input type="radio" name="Q10">
                        Leader
                    </label><br>
                    <label for="Q10AnswerB">
                        <input type="radio" name="Q10">
                        I can be a better leader( but is actually second in command)
                    </label><br>
                    <label for="Q10AnswerC">
                        <input type="radio" name="Q10">
                        Member
                    </label><br>
                    <label for="Q10AnswerD">
                        <input type="radio" name="Q10">
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
                    <label for="Q11AnswerA" class="forwardA">
                        <input type="radio" name="Q11">
                        Brother/Sister
                    </label><br>
                    <label for="Q11AnswerB">
                        <input type="radio" name="Q11">
                        My Abilities
                    </label><br>
                    <label for="Q11AnswerC">
                        <input type="radio" name="Q11">
                        Proving Something
                    </label><br>
                    <label for="Q11AnswerD">
                        <input type="radio" name="Q11">
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
                    <label for="Q12AnswerA" class="forwardA">
                        <input type="radio" name="Q12">
                        Tea
                    </label><br>
                    <label for="Q12AnswerB">
                        <input type="radio" name="Q12">
                        Water
                    </label><br>
                    <label for="Q12AnswerC">
                        <input type="radio" name="Q12">
                        Coffeee
                    </label><br>
                    <label for="Q12AnswerD">
                        <input type="radio" name="Q12">
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
                    <label for="Q13AnswerA" class="forwardA">
                        <input type="radio" name="Q13">
                        Charmander
                    </label><br>
                    <label for="Q13AnswerB">
                        <input type="radio" name="Q13">
                        Squirtle 
                    </label><br>
                    <label for="Q13AnswerC">
                        <input type="radio" name="Q13">
                        Bulbasaur
                    </label><br>
                    <label for="Q13AnswerD">
                        <input type="radio" name="Q13">
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
                    <label for="Q14AnswerA" class="forwardA">
                        <input type="radio" name="Q14">
                        Flame Tips
                    </label><br>
                    <label for="Q14AnswerB">
                        <input type="radio" name="Q14">
                        Aloe Vera
                    </label><br>
                    <label for="Q14AnswerC">
                        <input type="radio" name="Q14">
                        Cactus Flowers
                    </label><br>
                    <label for="Q14AnswerD">
                        <input type="radio" name="Q14">
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
                    <label for="Q15AnswerA" class="forwardA">
                        <input type="radio" name="Q15">
                        Neat And Tidy
                    </label><br>
                    <label for="Q15AnswerB">
                        <input type="radio" name="Q15">
                        Empty/Minimal
                    </label><br>
                    <label for="Q15AnswerC">
                        <input type="radio" name="Q15">
                        Lots Of Pictures
                    </label><br>
                    <label for="Q15AnswerD">
                        <input type="radio" name="Q15">
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
                    <label for="Q16AnswerA" class="forwardA">
                        <input type="radio" name="Q16">
                        Blindness or Really Horrible Vision
                    </label><br>
                    <label for="Q16AnswerB">
                        <input type="radio" name="Q16">
                        Paralyzed From Waste Down
                    </label><br>
                    <label for="Q16AnswerC">
                        <input type="radio" name="Q16">
                        Back Problems
                    </label><br>
                    <label for="Q16AnswerD">
                        <input type="radio" name="Q16">
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
                    <label for="Q17AnswerA" class="forwardA">
                        <input type="radio" name="Q17">
                        I kill them all with my special ability
                    </label><br>
                    <label for="Q17AnswerB">
                        <input type="radio" name="Q17">
                        I quickly attack, but they're too slow to fight back!
                    </label><br>
                    <label for="Q17AnswerC">
                        <input type="radio" name="Q17">
                        *Still in shock*
                    </label><br>
                    <label for="Q17AnswerD">
                        <input type="radio" name="Q17">
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
                    <label for="Q18AnswerA" class="forwardA">
                        <input type="radio" name="Q18">
                        9/10
                    </label><br>
                    <label for="Q18AnswerB">
                        <input type="radio" name="Q18">
                        8/10
                    </label><br>
                    <label for="Q18AnswerC">
                        <input type="radio" name="Q18">
                        Overwhelming
                    </label><br>
                    <label for="Q18AnswerD">
                        <input type="radio" name="Q18">
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
                    <label for="Q19AnswerA" class="forwardA">
                        <input type="radio" name="Q19">
                        Red Clouds Robe
                    </label><br>
                    <label for="Q19AnswerB">
                        <input type="radio" name="Q19">
                        Anbu Mask
                    </label><br>
                    <label for="Q19AnswerC">
                        <input type="radio" name="Q19">
                        Chunin Armor
                    </label><br>
                    <label for="Q19AnswerD">
                        <input type="radio" name="Q19">
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
                    <label for="Q20AnswerA" class="forwardA">
                        <input type="radio" name="Q20">
                        Critical
                    </label><br>
                    <label for="Q20AnswerB">
                        <input type="radio" name="Q20">
                        Cynical
                    </label><br>
                    <label for="Q20AnswerC">
                        <input type="radio" name="Q20">
                        Perverted
                    </label><br>
                    <label for="Q20AnswerD">
                        <input type="radio" name="Q20">
                        Stubborn
                    </label><br><br>

                    <div class="field is-grouped">
                        <p class="control">
                            <a class="button is-link">
                            Submit Answers
                            </a>
                        </p>
                        <p class="control">
                            <a class="button">
                            Cancel
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>