<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'includes/head-common.php'; ?>
    <title>Research | James Mineau</title>
    <link rel="stylesheet" href="styles.css?v=20260516j">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  </head>
  <body class="topo-background page-shell">
    <?php $activePage = 'research'; include 'includes/nav.php'; ?>

    <main class="page-content research-page">
      <section class="section-intro compact-intro">
        <p class="research-tagline">emissions in complex environments</p>
      </section>

      <section class="content-section research-projects">
        <div class="project-grid">
          <article class="project-item">
            <img class="project-media" src="assets/images/slv.jpg" alt="Salt Lake Valley Methane project image">
            <h4>Salt Lake Valley Methane</h4>
            <p>Bayesian inverse estimation of methane emissions using stationary and mobile observations with a Lagrangian transport model.</p>
            <div class="card-links">
              <a class="link-pill" href="methane/index.html">Dashboard</a>
              <a class="link-pill" href="posters/AGU23.pdf" target="_blank">AGU 2023</a>
              <a class="link-pill" href="posters/AGU24.pdf" target="_blank">AGU 2024</a>
              <a class="link-pill" href="posters/Sci4Sol26.pdf" target="_blank">Science for Solutions 2026</a>
            </div>
          </article>
          <article class="project-item">
            <img class="project-media" src="assets/images/trax.jpg" alt="TRAX project image">
            <h4>TRAX</h4>
            <p>Mobile greenhouse gas & air quality measurements in collaboration with Utah Transit Authority to characterize urban emissions across the valley.</p>
            <div class="card-links">
              <a class="link-pill" href="https://air.utah.edu" target="_blank">Greenhouse Gas Measurements</a>
              <a class="link-pill" href="https://utahaq.chpc.utah.edu" target="_blank">Air Quality Measurements</a>
              <a class="link-pill" href="https://www.youtube.com/watch?v=JSO7qIV4mYU" target="_blank">Utah Education Network video</a>
            </div>
          </article>
          <article class="project-item">
            <img class="project-media" src="assets/images/cheesehead.jpg" alt="CHEESEHEAD project image">
            <h4>CHEESEHEAD19</h4>
            <p>Land-atmosphere interaction research using eddy covariance and hyperspectral imagery from a large-scale field campaign in Wisconsin.</p>
            <div class="card-links">
              <a class="link-pill" href="https://flux.aos.wisc.edu/projects/2018/6/19/cheesehead19" target="_blank">Project page</a>
              <a class="link-pill" href="https://doi.org/10.1175/BAMS-D-19-0346.1" target="_blank">Butterworth et al. 2021</a>
              <a class="link-pill" href="https://doi.org/10.1029/2022JG007097" target="_blank">Desai et al. 2022</a>
              <a class="link-pill" href="https://doi.org/10.1029/2022JG007014" target="_blank">Desai et al. 2022</a>
              <a class="link-pill" href="posters/AMS22.pdf" target="_blank">AMS 2022</a>
            </div>
          </article>
          <article class="project-item">
            <img class="project-media" src="assets/images/reu.jpg" alt="Heber Valley CO2 project image">
            <h4>Heber Valley Carbon Dioxide</h4>
            <p>NSF REU project on the impacts of population growth on carbon dioxide trends in the montane-urban region of Heber Valley.</p>
            <div class="card-links">
              <a class="link-pill" href="https://atmos.utah.edu/get_involved/reu/index.php" target="_blank">REU Program</a>
              <a class="link-pill" href="posters/AMSStudent22.pdf" target="_blank">AMS Student 2022</a>
            </div>
          </article>
          <article class="project-item">
            <img class="project-media" src="assets/images/dairyhub.jpg" alt="Dairy Hub project image">
            <h4>Dairy Innovation Hub</h4>
            <p>Analysis of soil respiration and vegetation effects at a USDA dairy research facility in Wisconsin.</p>
            <div class="card-links">
              <a class="link-pill" href="https://dairyinnovationhub.wisc.edu/" target="_blank">Hub Homepage</a>
            </div>
          </article>
        </div>
      </section>

    </main>

    <?php include 'includes/footer.php'; ?>
  </body>
</html>