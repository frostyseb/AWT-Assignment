<script src="src/js/validation.js"></script>

<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark fixed-top" id="top">
 <a href="http://www.qiup.edu.my" target="_blank"><img src="src/assets/quest_logo.png" width="90em" height="90em"></a><a
    class="navbar-brand" href="main_page.php">CCA QIUP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="main_page.php">
          <i class="fa fa-home"></i>
          Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="login.php">
          <i class="fa fa-sign-in"></i>
          Login
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fa fa-user-circle-o"></i>
          Profile
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="club_form.php">
          <i class="fa fa-cubes"></i>
          Add C/S
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="club_member.php">
          <i class="fa fa-plus-circle"></i>
          Register
          <span class="sr-only">(current)</span>
        </a>
      </li>
    </ul>
	
    <form id="searchForm" autocomplete="off" onsubmit="return validation()" method="POST" name="searchForm" action="search.php">
      <div class="autocomplete" style="width:300px;">
        <input id="myInput" type="text" name="clubs" placeholder="Search clubs or societies" onkeyup="displayHint(this.value)">
      </div>
      <button type="submit" form="searchForm" id="searchBtn"><i class="fa fa-search"></i></button>
      <div id="hintText"></div>
    </form>

    <script src="src/js/suggest.js"></script>

  </div>
</nav>

<style>
  @import url("//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");

  .navbar-icon-top .navbar-nav .nav-link>.fa {
    position: relative;
    width: 36px;
    font-size: 24px;
  }

  .navbar-icon-top .navbar-nav .nav-link>.fa>.badge {
    font-size: 0.75rem;
    position: absolute;
    right: 0;
    font-family: sans-serif;
  }

  .navbar-icon-top .navbar-nav .nav-link>.fa {
    top: 3px;
    line-height: 12px;
  }

  .navbar-icon-top .navbar-nav .nav-link>.fa>.badge {
    top: -10px;
  }

  @media (min-width: 576px) {
    .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link {
      text-align: center;
      display: table-cell;
      height: 70px;
      vertical-align: middle;
      padding-top: 0;
      padding-bottom: 0;
    }

    .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link>.fa {
      display: block;
      width: 48px;
      margin: 2px auto 4px auto;
      top: 0;
      line-height: 24px;
    }

    .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link>.fa>.badge {
      top: -7px;
    }
  }

  @media (min-width: 768px) {
    .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link {
      text-align: center;
      display: table-cell;
      height: 70px;
      vertical-align: middle;
      padding-top: 0;
      padding-bottom: 0;
    }

    .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link>.fa {
      display: block;
      width: 48px;
      margin: 2px auto 4px auto;
      top: 0;
      line-height: 24px;
    }

    .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link>.fa>.badge {
      top: -7px;
    }
  }

  @media (min-width: 992px) {
    .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link {
      text-align: center;
      display: table-cell;
      height: 70px;
      vertical-align: middle;
      padding-top: 0;
      padding-bottom: 0;
    }

    .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link>.fa {
      display: block;
      width: 48px;
      margin: 2px auto 4px auto;
      top: 0;
      line-height: 24px;
    }

    .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link>.fa>.badge {
      top: -7px;
    }
  }

  @media (min-width: 1200px) {
    .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link {
      text-align: center;
      display: table-cell;
      height: 70px;
      vertical-align: middle;
      padding-top: 0;
      padding-bottom: 0;
    }

    .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link>.fa {
      display: block;
      width: 48px;
      margin: 2px auto 4px auto;
      top: 0;
      line-height: 24px;
    }

    .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link>.fa>.badge {
      top: -7px;
    }
  }

  * {
    box-sizing: border-box;
  }

  .autocomplete {
    /*the container must be positioned relative:*/
    position: relative;
    display: inline-block;
  }

  input {
    border: 1px solid transparent;
    background-color: #f1f1f1;
    padding: 10px;
    font-size: 16px;
  }

  input[type=text] {
    background-color: #f1f1f1;
    width: 100%;
  }

  #searchBtn {
    background-color: DodgerBlue;
    color: #fff;
    padding: 10px;
    border: 1px solid DodgerBlue;
    cursor: pointer;
  }

  .autocompleteItems {
    display: block;
    border: none;
    position: relative;
    padding: 1em;
    background-color: #D1D1D1;
    cursor: pointer;
    width: 100%;
    border-bottom: 1px solid #A2A2A2;
    z-index: 999;
  }

  #hintText {
    position: absolute;
  }


  .autocompleteItems :hover {
    /*when hovering an item:*/
    background-color: #e9e9e9;
  }

  .autocompleteItems :focus {
    /*when navigating through the items using the arrow keys:*/
    background-color: DodgerBlue !important;
    color: #ffffff;
  }
</style>