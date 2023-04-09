<?php include('./includes/header.php');  ?>

<div class="container-fluid  py-3">
    <header class="text-center">
        
        <img src="./assets/img/logo.png" class="img-fluid " alt="Acharya Institutes">
    </header>
    <div class=" container text-center heading mt-4 p-2 text-light ">
    <h1 class="font-weight-bold" >Acharya Psychometric Test </h1>
    </div>
</div>
<section class="container my-2 w-100 mb-4 text-dark p-2 main">
    <form class="row g-3 p-3 " action="./includes/submit.php" method="post" onSubmit="fn1()">
        <div class="col-md-8">
            <label for="validationDefault01" class="form-label">Student Name</label>
            <input type="text" class="form-control" id="validationDefault01" name="sname" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefault02" class="form-label">Current Grade/Class</label>
            <input type="text" class="form-control" id="validationDefault02" name="grade" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefaultUsername" class="form-label">Stream</label>
            <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="stream" required>
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email Address</label>
            <input type="email" class="form-control" name="email" id="inputEmail4" required>
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Country</label>
            <input type="text" class="form-control" id="inputPassword4" name="country" required>
        </div>
        <div class="col-6">
            <label for="inputAddress" class="form-label">Mobile Number</label>
            <input type="text" class="form-control" id="inputAddress" name="phno" required>
        </div>


        <div class="col-md-12 ">

            <!-- EXTROVERT or INROVERT -->
            <section>
                <div class="container mt-4">
                    <h2 class="text-center mt-4">EXTROVERT or INROVERT</h2>
                    <ul class="ml-4">
                        <li>
                            <h5 class="mt-4">BEHAVIOUR</h5>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd1" name="op1" value="1" required>
                            <label class="form-check-label" for="inlineRadio1">I am Outgoing</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd2" name="op1" value="2" >
                            <label class="form-check-label" for="inlineRadio2">I am Reserved</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd3" name="op2" value="3"required>
                            <label class="form-check-label" for="inlineRadio1"> I am Relaxed </label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd4" name="op2" value="4">
                            <label class="form-check-label" for="inlineRadio2">I am Intense</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd5" name="op3" value="5" required>
                            <label class="form-check-label" for="inlineRadio1">I am Enthusiastic</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd6" name="op3" value="6">
                            <label class="form-check-label" for="inlineRadio2">I am Aloof</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd7" name="op4" value="7" required>
                            <label class="form-check-label" for="inlineRadio1">I Speak-out in groups</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd8" name="op4" value="8">
                            <label class="form-check-label" for="inlineRadio2">I Absorb information in groups</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd9" name="op5" value="9" required>
                            <label class="form-check-label" for="inlineRadio1">My Energy grows at parties</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd10" name="op5" value="10">
                            <label class="form-check-label" for="inlineRadio2">My Energy wanes at parties</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd11" name="op6" value="11" required>
                            <label class="form-check-label" for="inlineRadio1">I have a large group of friends</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd12" name="op6" value="12">
                            <label class="form-check-label" for="inlineRadio2">I have a select few friends</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd13" name="op7" value="13" required>
                            <label class="form-check-label" for="inlineRadio1">I think out loud</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd14" name="op7" value="14">
                            <label class="form-check-label" for="inlineRadio2">I think within</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd15" name="op8" value="15" required>
                            <label class="form-check-label" for="inlineRadio1">I look for activity</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd16" name="op8" value="16">
                            <label class="form-check-label" for="inlineRadio2">I seek for quiet time</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd17" name="op9" value="17" required>
                            <label class="form-check-label" for="inlineRadio1">I like to talk </label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd18" name="op9" value="18">
                            <label class="form-check-label" for="inlineRadio2">I like to listen</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd19" name="op10" value="19" required>
                            <label class="form-check-label" for="inlineRadio1">I share my personal experiences</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd20" name="op10" value="20">
                            <label class="form-check-label" for="inlineRadio2">I am unapproachable</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd21" name="op11" value="21" required>
                            <label class="form-check-label" for="inlineRadio1">I like new experiences</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd22" name="op11" value="22">
                            <label class="form-check-label" for="inlineRadio2">I like stability in my inner life</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd23" name="op12" value="23" required>
                            <label class="form-check-label" for="inlineRadio1">I want to be with people</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd24" name="op12" value="24">
                            <label class="form-check-label" for="inlineRadio2">I take a detached approach</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd25" name="op13" value="25" required>
                            <label class="form-check-label" for="inlineRadio1">I am influenced by external opinions</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd26" name="op13" value="26">
                            <label class="form-check-label" for="inlineRadio2">I am inner directed</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd27" name="op14" value="27" required>
                            <label class="form-check-label" for="inlineRadio1">I show emotions</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd28" name="op14" value="28">
                            <label class="form-check-label" for="inlineRadio2">I exercise restraint</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd29" name="op15" value="29" required>
                            <label class="form-check-label" for="inlineRadio1">I respond quickly</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd30" name="op15" value="30">
                            <label class="form-check-label" for="inlineRadio2">I respond carefully</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>
                </div>
            </section>

            <!-- SENSING or INTUTION  -->
            <section>
                <div class="container mt-4">
                    <h2 class="text-center mt-4">SENSING or INTUITION</h2>
                    <ul class="ml-4">
                        <li>
                            <h5 class="mt-4">BEHAVIOUR</h5>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd31" name="op16" value="1" required>
                            <label class="form-check-label" for="inlineRadio1">I am Realistic</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd32" name="op16" value="2">
                            <label class="form-check-label" for="inlineRadio2">I am Inspirational</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd33" name="op17" value="3" required>
                            <label class="form-check-label" for="inlineRadio1"> I like Routine </label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd34" name="op17" value="4">
                            <label class="form-check-label" for="inlineRadio2">I like Variety</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd35" name="op18" value="5" required>
                            <label class="form-check-label" for="inlineRadio1">I think about facts</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd36" name="op18" value="6">
                            <label class="form-check-label" for="inlineRadio2">I think about possibilities</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd37" name="op19" value="7" required>
                            <label class="form-check-label" for="inlineRadio1">I like Precision</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd38" name="op19" value="8">
                            <label class="form-check-label" for="inlineRadio2">I like Brainstorming</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd39" name="op20" value="9" required>
                            <label class="form-check-label" for="inlineRadio1">I am concerned with the present</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd40" name="op20" value="10">
                            <label class="form-check-label" for="inlineRadio2">I am concerned with the future</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd41" name="op21" value="11" required>
                            <label class="form-check-label" for="inlineRadio1">I use my five senses</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd42" name="op21" value="12">
                            <label class="form-check-label" for="inlineRadio2">I rely on my sixth sense</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd43" name="op22" value="13" required>
                            <label class="form-check-label" for="inlineRadio1">My feet are on the ground</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd44" name="op22" value="14">
                            <label class="form-check-label" for="inlineRadio2">My head is in the clouds</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd45" name="op23" value="15" required>
                            <label class="form-check-label" for="inlineRadio1">My mind is literal</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd46" name="op23" value="16">
                            <label class="form-check-label" for="inlineRadio2">My mind is Symbolic</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd47" name="op24" value="17" required>
                            <label class="form-check-label" for="inlineRadio1">I make direct statements </label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd48" name="op24" value="18">
                            <label class="form-check-label" for="inlineRadio2">I make allegorical statements</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd49" name="op25" value="19" required>
                            <label class="form-check-label" for="inlineRadio1">I pay attention to basics</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd50" name="op25" value="20">
                            <label class="form-check-label" for="inlineRadio2">I pay attention to overtones</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd51" name="op26" value="21" required>
                            <label class="form-check-label" for="inlineRadio1">I use learned skills</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd52" name="op26" value="22">
                            <label class="form-check-label" for="inlineRadio2">I acquire new skills</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd53" name="op27" value="23" required>
                            <label class="form-check-label" for="inlineRadio1">My focus is on reality</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd54" name="op27" value="24">
                            <label class="form-check-label" for="inlineRadio2">My focus is on inspiration</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd55" name="op28" value="25" required>
                            <label class="form-check-label" for="inlineRadio1">I am steadfast</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd56" name="op28" value="26">
                            <label class="form-check-label" for="inlineRadio2">I am mercurial</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd57" name="op29" value="27" required>
                            <label class="form-check-label" for="inlineRadio1">I work on solving problems</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd58" name="op29" value="28">
                            <label class="form-check-label" for="inlineRadio2">I discover problems</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd59" name="op30" value="29" required>
                            <label class="form-check-label" for="inlineRadio1">I like details</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd60" name="op30" value="30">
                            <label class="form-check-label" for="inlineRadio2">I like the big picture</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>
                </div>
            </section>

            <!-- THINKING or FEELING -->
            <section>
                <div class="container mt-4">
                    <h2 class="text-center mt-4">THINKING or FEELING</h2>
                    <ul class="ml-4">
                        <li>
                            <h5 class="mt-4">BEHAVIOUR</h5>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd61" name="op31" value="1" required>
                            <label class="form-check-label" for="inlineRadio1">I am logical and analytical</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd62" name="op31" value="2">
                            <label class="form-check-label" for="inlineRadio2">I have a personal value orientation</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd63" name="op32" value="3" required>
                            <label class="form-check-label" for="inlineRadio1"> I am Critical </label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd64" name="op32" value="4">
                            <label class="form-check-label" for="inlineRadio2">I am Pleasant</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd65" name="op33" value="5" required>
                            <label class="form-check-label" for="inlineRadio1">I am firm on policy</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd66" name="op33" value="6">
                            <label class="form-check-label" for="inlineRadio2">I bend the rules</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd67" name="op34" value="7" required>
                            <label class="form-check-label" for="inlineRadio1">I have an impersonal orientation to problems</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd68" name="op34" value="8">
                            <label class="form-check-label" for="inlineRadio2">I have strong personal involvement in problems</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd69" name="op35" value="9" required>
                            <label class="form-check-label" for="inlineRadio1">I am direct</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd70" name="op35" value="10">
                            <label class="form-check-label" for="inlineRadio2">I am tactful</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd71" name="op36" value="11" required>
                            <label class="form-check-label" for="inlineRadio1">I show justice</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd72" name="op36" value="12">
                            <label class="form-check-label" for="inlineRadio2">I show mercy</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd73" name="op37" value="13" required>
                            <label class="form-check-label" for="inlineRadio1">I am hard-headed</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd74" name="op37" value="14">
                            <label class="form-check-label" for="inlineRadio2">I am soft-minded</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd75" name="op38" value="15" required>
                            <label class="form-check-label" for="inlineRadio1">I am far-minded</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd76" name="op38" value="16">
                            <label class="form-check-label" for="inlineRadio2">I am sympathetic</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd77" name="op39" value="17" required>
                            <label class="form-check-label" for="inlineRadio1">I focus on ideas </label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd78" name="op39" value="18">
                            <label class="form-check-label" for="inlineRadio2">I focus on ideals</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd79" name="op40" value="19" required>
                            <label class="form-check-label" for="inlineRadio1">I am firm</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd80" name="op40" value="20">
                            <label class="form-check-label" for="inlineRadio2">I am gentle</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd81" name="op41" value="21" required>
                            <label class="form-check-label" for="inlineRadio1">I am unaffected by atmosphere</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd82" name="op41" value="22">
                            <label class="form-check-label" for="inlineRadio2">I am tuned into atmosphere</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd83" name="op42" value="23" required>
                            <label class="form-check-label" for="inlineRadio1">I concentrate on the task</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd84" name="op42" value="24">
                            <label class="form-check-label" for="inlineRadio2">I concentrate on the relationship</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd85" name="op43" value="25" required>
                            <label class="form-check-label" for="inlineRadio1">I prefer the honest truth</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd86" name="op43" value="26">
                            <label class="form-check-label" for="inlineRadio2">I avoid unpleasantness</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd87" name="op44" value="27" required>
                            <label class="form-check-label" for="inlineRadio1">I am upset by illogic</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd88" name="op44" value="28">
                            <label class="form-check-label" for="inlineRadio2">I accept illogic</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd89" name="op45" value="29" required>
                            <label class="form-check-label" for="inlineRadio1">I am tuned into designs</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd90" name="op45" value="30">
                            <label class="form-check-label" for="inlineRadio2">I am tuned into people</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>
                </div>
            </section>

            <!-- JUDGING or PERCEPTION -->
            <section>
                <div class="container mt-4">
                    <h2 class="text-center mt-4">JUDGING or PERCEPTION</h2>
                    <ul class="ml-4">
                        <li>
                            <h5 class="mt-4">BEHAVIOUR</h5>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd91" name="op46" value="1" required>
                            <label class="form-check-label" for="inlineRadio1">I am deliberate</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd92" name="op46" value="2">
                            <label class="form-check-label" for="inlineRadio2">I am spontaneous</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd93" name="op47" value="3" required>
                            <label class="form-check-label" for="inlineRadio1"> I prefer structure </label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd94" name="op47" value="4">
                            <label class="form-check-label" for="inlineRadio2">I prefer to be unstructured</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd95" name="op48" value="5" required>
                            <label class="form-check-label" for="inlineRadio1">I am decisive</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd96" name="op48" value="6">
                            <label class="form-check-label" for="inlineRadio2">I am cautious</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd97" name="op49" value="7" required>
                            <label class="form-check-label" for="inlineRadio1">I am opinionated</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd98" name="op49" value="8">
                            <label class="form-check-label" for="inlineRadio2">I am open-minded</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd99" name="op50" value="9" required>
                            <label class="form-check-label" for="inlineRadio1">I preserve</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd100" name="op50" value="10">
                            <label class="form-check-label" for="inlineRadio2">I procrastinate</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd101" name="op51" value="11" required>
                            <label class="form-check-label" for="inlineRadio1">I am organized and systematic </label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd102" name="op51" value="12">
                            <label class="form-check-label" for="inlineRadio2">I am flexible</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd103" name="op52" value="13" required>
                            <label class="form-check-label" for="inlineRadio1">I am self-regimented</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd104" name="op52" value="14">
                            <label class="form-check-label" for="inlineRadio2">I am open-ended</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd105" name="op53" value="15" required>
                            <label class="form-check-label" for="inlineRadio1">I am punctual </label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd106" name="op53" value="16">
                            <label class="form-check-label" for="inlineRadio2">I am relaxed</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd107" name="op54" value="17" required>
                            <label class="form-check-label" for="inlineRadio1">I am systematic </label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd108" name="op54" value="18">
                            <label class="form-check-label" for="inlineRadio2">I am impulsive </label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd109" name="op55" value="19" required>
                            <label class="form-check-label" for="inlineRadio1">I aim to be right </label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd110" name="op55" value="20">
                            <label class="form-check-label" for="inlineRadio2">I accept being wrong </label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd111" name="op56" value="21" required>
                            <label class="form-check-label" for="inlineRadio1">I am geared to morality </label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd112" name="op56" value="22">
                            <label class="form-check-label" for="inlineRadio2">I am geared to existential </label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd113" name="op57" value="23" required>
                            <label class="form-check-label" for="inlineRadio1">I am critical </label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd114" name="op57" value="24">
                            <label class="form-check-label" for="inlineRadio2">I consent </label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd115" name="op58" value="25" required>
                            <label class="form-check-label" for="inlineRadio1">I live up to standards </label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd116" name="op58" value="26">
                            <label class="form-check-label" for="inlineRadio2">I am open to new experiences </label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd117" name="op59" value="27" required>
                            <label class="form-check-label" for="inlineRadio1">I have enduring friendships </label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd118" name="op59" value="28">
                            <label class="form-check-label" for="inlineRadio2"> I have easy acquaintanceships </label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd119" name="op60" value="29" required>
                            <label class="form-check-label" for="inlineRadio1">I live to plan</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd120" name="op60" value="30">
                            <label class="form-check-label" for="inlineRadio2">I like unplanned activities</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>
                </div>
            </section>



        </div>








        <div class="col-md-12 text-center">
            <!-- <input type="submit" name="Submit" value="SUBMIT" class="btn btn-primary " onclick="fn1()"> -->
            <button class="bn30"  id="btn1"> Submit </button>
        </div>
    </form>
</section>

<?php include('./includes/footer.php');  ?>