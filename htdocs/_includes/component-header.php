<?php function component_header() { ?>
  <?php global $site; ?>
  <header class="page--header">
    <div class="page--header--title">
      <?=$site->title?>
    </div>
    <?php if (is_logged_in()): ?>
      <button id="page--header--burger">
        <img src="<?=BASEURL?>img/ic_menu_4d4d4d_24px.svg"
          alt="Toggle Menu Visibility"/>
      </button>
    <?php endif; ?>
  </header>

  <?php if (is_logged_in()): ?>
    <nav id="page--menu">
      <a class="page--menu--item" href="<?=BASEURL?>index.php">
        Announcements
      </a>
      <a class="page--menu--item" href="<?=BASEURL?>assets/syllabus.pdf"
        target="_blank">
        Syllabus
      </a>
      <a class="page--menu--item" href="<?=BASEURL?>course-team.php">
        Course Team
      </a>
      <a class="page--menu--item" href="<?=BASEURL?>calendar.php">
        Calendar
      </a>
      <a class="page--menu--item" href="<?=BASEURL?>lectures.php">
        Lectures
      </a>
      <a class="page--menu--item" href="<?=BASEURL?>labs.php">
        Labs
      </a>
      <a class="page--menu--item" href="<?=BASEURL?>assignments.php">
        Assignments
      </a>
      <a class="page--menu--item" href="<?=BASEURL?>exams.php">
        Exams
      </a>
      <a class="page--menu--item" href="https://piazza.com/class/jcpjjp5l4bywd"
        target="_blank" rel="noopener">
        Piazza
      </a>
      <a class="page--menu--item" href="https://markus.utsc.utoronto.ca/cscb20w18"
        target="_blank" rel="noopener">
        Markus
      </a>
      <?php if (has_page_permission($_SESSION['role'], '/student-grades.php')): ?>
        <a class="page--menu--item" href="<?=BASEURL?>student-grades.php">
          My Grades
        </a>
      <?php endif; ?>
      <a class="page--menu--item" href="<?=BASEURL?>logout.php">
        Logout
      </a>
    </nav>
  <?php endif; ?>
<?php } ?>
