<?php
$page = 'features';
include ('./components/header.php');
include ('./components/navbar.php');
?>

    <section>
      <div class="container">
        <div class="row">
          <div class="col">
            <table class="table table-hover pricing-table table-responsive-md">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">
                    <span class="h4">Basic</span>
                    <div class="d-flex pt-md-3">
                      <span class="h3">$</span>
                      <span class="display-4">49</span>
                    </div>
                    <span class="text-small text-muted">Per user, per month</span>
                    <a href="#" class="btn d-block mt-4 btn-outline-primary">Get Basic</a>
                  </th>
                  <th scope="col">
                    <span class="h4">Pro</span>
                    <div class="d-flex pt-md-3">
                      <span class="h3">$</span>
                      <span class="display-4">69</span>
                    </div>
                    <span class="text-small text-muted">Per user, per month</span>
                    <a href="#" class="btn d-block mt-4 btn-primary">Get Pro</a>
                  </th>
                  <th scope="col">
                    <span class="h4">Ultimate</span>
                    <div class="d-flex pt-md-3">
                      <span class="h3">$</span>
                      <span class="display-4">89</span>
                    </div>
                    <span class="text-small text-muted">Per user, per month</span>
                    <a href="#" class="btn d-block mt-4 btn-outline-primary">Get Ultimate</a>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">
                    <span class="h6 mb-0 d-block">Bandwidth</span>
                    <span class="text-small text-muted">On a per site basis</span>
                  </th>
                  <td>
                    <span>50GB</span>
                  </td>
                  <td>
                    <span>100GB</span>
                  </td>
                  <td>
                    <span>Unlimited</span>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <span class="h6 mb-0 d-block">Page Views</span>
                    <span class="text-small text-muted">Fair use policy applies</span>
                  </th>
                  <td>
                    <span>20,000</span>
                  </td>
                  <td>
                    <span>100,000</span>
                  </td>
                  <td>
                    <span>Unlimited</span>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <span class="h6 mb-0 d-block">Contracts</span>
                    <span class="text-small text-muted">With Digital Signature</span>
                  </th>
                  <td>
                    <span>100</span>
                  </td>
                  <td>
                    <span>1,000</span>
                  </td>
                  <td>
                    <span>Unlimited</span>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <span class="h6 mb-0 d-block">Integrations</span>
                    <span class="text-small text-muted"></span>
                  </th>
                  <td>
                    <div class="icon-round icon-round-xs bg-success">
                      <img class="icon bg-light" src="assets/img/icons/interface/check.svg" alt="check interface icon" data-inject-svg />
                    </div>
                  </td>
                  <td>
                    <div class="icon-round icon-round-xs bg-success">
                      <img class="icon bg-light" src="assets/img/icons/interface/check.svg" alt="check interface icon" data-inject-svg />
                    </div>
                  </td>
                  <td>
                    <div class="icon-round icon-round-xs bg-success">
                      <img class="icon bg-light" src="assets/img/icons/interface/check.svg" alt="check interface icon" data-inject-svg />
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <span class="h6 mb-0 d-block">Segmentation</span>
                    <span class="text-small text-muted"></span>
                  </th>
                  <td></td>
                  <td>
                    <div class="icon-round icon-round-xs bg-success">
                      <img class="icon bg-light" src="assets/img/icons/interface/check.svg" alt="check interface icon" data-inject-svg />
                    </div>
                  </td>
                  <td>
                    <div class="icon-round icon-round-xs bg-success">
                      <img class="icon bg-light" src="assets/img/icons/interface/check.svg" alt="check interface icon" data-inject-svg />
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <span class="h6 mb-0 d-block">White Labelling</span>
                    <span class="text-small text-muted"></span>
                  </th>
                  <td></td>
                  <td></td>
                  <td>
                    <div class="icon-round icon-round-xs bg-success">
                      <img class="icon bg-light" src="assets/img/icons/interface/check.svg" alt="check interface icon" data-inject-svg />
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col text-center">
            <span>Interested in a custom plan? <a href="#" onClick="tidioChatApi.open();">Get in touch</a>
            </span>
          </div>
        </div>
      </div>
    </section>

<?php include ('./components/footer.php'); ?>