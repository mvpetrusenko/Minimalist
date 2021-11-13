<?php
session_start(); //запускаем сессию
$title = "Про нас";
require_once "blocks/header.php";
?>
<div class="container">
  <h1 class="mt-5">Про нас</h1><br>


    <div class="alert alert-success d-flex align-items-center" role="alert">

        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <div>
            Discover some information about us
        </div>
    </div>

    <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    About company
                </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                    <strong>We help people to know more about minimalism</strong> Useful resources and articles about minimalist life.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    Location
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                    <strong>Kyiv, Ukraine</strong> To know more watch our YouTube channel
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    Recommendations
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body">
                    <strong>They think we are awesome!</strong> Discover why and enjoy visiting our website!
                </div>
            </div>
        </div>
    </div>

  <ul class="list-unstyled">
      <p><li>Benefits of Minimalism:</p>
          <ul>
              <li><b>Spend Less.</b> Choosing to accumulate only the essentials often results in financial freedom.</li>
              <li><b>Do Work You Love.</b> Own less stuff. Choose work you love.</li>
              <li><b>Freedom From the Comparison Game.</b></li>
          </ul>
      </li>
      <li>Own less, live more, and create space for the things you love.</li>
  </ul>
</div>

<?php
require_once "blocks/footer.php";
?>
