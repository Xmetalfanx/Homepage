<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Xmetal&apos;s Homepage</title>

    <?php require __DIR__ . '/modules/headerInclude.tpl'; ?>
  </head>
  <body>
    <header>
      <div class="frontpage-header-title">Xmetal's Homepage</div>
    </header>


    <div class="main-section">
      <div class="frontpage-section">
        <?php include 'modules/siteSection.php'; ?>
        <?php include 'modules/git.php'; ?>
      </div>
    </div>

    <?php include 'modules/footer.tpl'; ?>
  </body>
</html>
