
@section('page_h1', 'UNDER GRADUATES PROGRAMMES ')
@section('title', '') @section('description', '') @section('keywords', '') @section('og_title', '') @section('og_description', '') @section('og_image', '')
@section('content')


<div className="page-content ">
  {/*banner*/}
  <div className="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style={{backgroundImage: 'url(images/background/bg3.jpg)'}}>
    <div className="container">
      <div className="dz-bnr-inr-entry">
        <h1>UNDER GRADUATES PROGRAMMES </h1>
        <nav aria-label="breadcrumb" className="breadcrumb-row">
          <ul className="breadcrumb">
            <li className="breadcrumb-item"><a href="{{ route('home') }}"> Home</a></li>
            <li className="breadcrumb-item">UNDER GRADUATES PROGRAMMES</li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <div className="bg-tech">
    <div className="container mt-4 mb-5">
      <h3 className="mt-5 p-5 text-center">UNDER GRADUATES PROGRAMMES UNDER (FYUP)</h3>
      <div className="search-box">
        <input type="text" id="search" placeholder="Search by subject" />
      </div>
      <div className="grid" id="cardGrid">
        {/* 1–4 */}
        <a href="{{ route('page.show', ['page' => 'Bachelor-of-Arts-Programmes']) }}">
          <div className="card">Bachelor of Arts Programmes<br />
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="{{ route('page.show', ['page' => 'Bachelor-of-Science-programmes']) }}">
          <div className="card">
            Bachelor of Science<br />
            Programmes
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="{{ route('page.show', ['page' => 'IGNOU-BCom-Admission-2025']) }}">
          <div className="card">
            Bachelor of Commerce <br />
            Programme
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="#">
          <div className="card">
            Bachelor of Tourism And Travel Management<br />
            <p style={{color: '#b1b3b5'}}>(BFTTM)</p>
            <button className="arrow-btn">›</button>
          </div>
        </a>
        {/* 5th: View More in grid */}
        <a href="{{ route('page.show', ['page' => 'four-year-under-graduate-programm']) }}">
          <div className="card view-more-card" id="viewMoreBtn">+ View More</div>
        </a>
        {/* Extra cards (hidden initially) */}
      </div>
    </div>
    <div className="container mt-4 mb-5">
      <h3 className="mt-5 p-5 text-center">MASTER DEGREE PROGRAMS</h3>
      <div className="search-box">
        <input type="text" id="search" placeholder="Search by subject" />
      </div>
      <div className="grid" id="cardGrid">
        {/* 1–4 */}
        <a href="{{ route('page.show', ['page' => 'Management-Business-Programs']) }}">
          <div className="card">Management &amp; Business Programs<br />
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="{{ route('page.show', ['page' => 'Ignou-Arts-Humanities-Programmes']) }}">
          <div className="card">
            Arts &amp; Humanities<br />
            Programmes
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="{{ route('page.show', ['page' => 'Master-Programmes-Social-Work-Counselling']) }}">
          <div className="card">
            Social Work &amp; Counselling <br />
            Programmes
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="{{ route('page.show', ['page' => 'Master-of-Science-Programmes-Science']) }}">
          <div className="card">
            Science Programmes<br />
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="{{ route('page.show', ['page' => 'ignou-Computer-Applications-IT']) }}">
          <div className="card">
            Computer Applications<br />
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="{{ route('page.show', ['page' => 'IGNOU-Master-of-Library-and-Information-Science-Admission-2025']) }}">
          <div className="card">
            Library &amp; Information Science<br />
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="{{ route('page.show', ['page' => 'IGNOU-Master-of-Tourism-and-Travel-Management-Admission-2025']) }}">
          <div className="card">
            Tourism &amp; Travel Management<br />
            <button className="arrow-btn">›</button>
          </div>
        </a>
        {/* 5th: View More in grid */}
        <a href="#">
          <div className="card view-more-card" id="viewMoreBtn">+ View More</div>
        </a>
        {/* Extra cards (hidden initially) */}
      </div>
    </div>
    <div className="container mt-4 mb-5">
      <h3 className="mt-5 p-5 text-center">POST GRADUATE DIPLOMA PROGRAMMES</h3>
      <div className="search-box">
        <input type="text" id="search" placeholder="Search by subject" />
      </div>
      <div className="grid" id="cardGrid">
        {/* 1–4 */}
        <a href="{{ route('page.show', ['page' => 'post-graduate-Education-Teaching-Related-Programs']) }}">
          <div className="card">Education &amp; Teaching Related Programs<br />
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="{{ route('page.show', ['page' => 'Pg-Social-Work-Development-Programmes']) }}">
          <div className="card">
            Social Work &amp; Development<br />
            Programmes
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="{{ route('page.show', ['page' => 'Pg-Health-Psychology-Programmes']) }}">
          <div className="card">
            Health &amp; Psychology <br />
            Programmes
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="{{ route('page.show', ['page' => 'Pg-Management-Business-Programmes']) }}">
          <div className="card">
            Management &amp; Business Programmes<br />
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="{{ route('page.show', ['page' => 'Pg-Journalism-Communication-Programmes']) }}">
          <div className="card">
            Journalism &amp; Communication<br />
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="{{ route('page.show', ['page' => 'Pg-Computer-IT-Programmes']) }}">
          <div className="card">
            Computer &amp; IT<br />
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="{{ route('page.show', ['page' => 'Pg-Environment-Disaster-Management-Programmes']) }}">
          <div className="card">
            Environment &amp; Disaster Management<br />
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="{{ route('page.show', ['page' => 'Pg-Languages-Literature-Programmes']) }}">
          <div className="card">
            Languages &amp; Literature<br />
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="{{ route('page.show', ['page' => 'Pg-Law-Criminal-Justice-Programmes']) }}">
          <div className="card">
            Law &amp; Criminal Justice<br />
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="{{ route('page.show', ['page' => 'Pg-Women-Gender-Studies-Programmes']) }}">
          <div className="card">
            Women &amp; Gender Studies<br />
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="{{ route('page.show', ['page' => 'Pg-others-specialized']) }}">
          <div className="card">
            Others / Specialized<br />
            <button className="arrow-btn">›</button>
          </div>
        </a>
        {/* 5th: View More in grid */}
        <a href="#">
          <div className="card view-more-card" id="viewMoreBtn">+ View More</div>
        </a>
        {/* Extra cards (hidden initially) */}
      </div>
    </div>
    <div className="container mt-4 mb-5">
      <h3 className="mt-5 p-5 text-center">DIPLOMA PROGRAMMES</h3>
      <div className="search-box">
        <input type="text" id="search" placeholder="Search by subject" />
      </div>
      <div className="grid" id="cardGrid">
        {/* 1–4 */}
        <a href="{{ route('page.show', ['page' => 'Diploma-programmes-healthcare-nursing']) }}">
          <div className="card">Healthcare &amp; Nursing<br />
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="{{ route('page.show', ['page' => 'Diploma-programmes-Agriculture-food-processing']) }}">
          <div className="card">
            Agriculture &amp; Food Processing
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="{{ route('page.show', ['page' => 'Diploma-programmes-Business-Finance-management']) }}">
          <div className="card">
            Business, Finance &amp; Management
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="{{ route('page.show', ['page' => 'Diploma-programmes-Retail-merchandising']) }}">
          <div className="card">
            Retail &amp; Merchandising
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="{{ route('page.show', ['page' => 'Diploma-programmes-Creative-Arts-Languages']) }}">
          <div className="card">
            Creative Arts &amp; Languages
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="{{ route('page.show', ['page' => 'Diploma-programmes-engineering-technology']) }}">
          <div className="card">
            Engineering &amp; Technology
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="{{ route('page.show', ['page' => 'Diploma-programmes-administration-development']) }}">
          <div className="card">
            Administration &amp; Development
            <button className="arrow-btn">›</button>
          </div>
        </a>
        {/* 5th: View More in grid */}
        <a href="#">
          <div className="card view-more-card" id="viewMoreBtn">+ View More</div>
        </a>
        {/* Extra cards (hidden initially) */}
      </div>
    </div>
    <div className="container mt-4 mb-5">
      <h3 className="mt-5 p-5 text-center">POST GRADUATE CERTIFICATE PROGRAMMES</h3>
      <div className="search-box">
        <input type="text" id="search" placeholder="Search by subject" />
      </div>
      <div className="grid" id="cardGrid">
        {/* 1–4 */}
        <a href="{{ route('page.show', ['page' => 'Post-Graduate-Certificate-engineering-technology']) }}">
          <div className="card">Technology &amp; Engineering<br />
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="{{ route('page.show', ['page' => 'Post-Graduate-Certificate-Agriculture-Environment']) }}">
          <div className="card">
            Agriculture &amp; Environment
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="{{ route('page.show', ['page' => 'Post-Graduate-Certificate-Safety-Industrial-Management']) }}">
          <div className="card">
            Safety &amp; Industrial Management
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="{{ route('page.show', ['page' => 'Post-Graduate-Certificate-Peace-Gandhian-Studies']) }}">
          <div className="card">
            Peace &amp; Gandhian Studies
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="{{ route('page.show', ['page' => 'Post-Graduate-Certificate-Languages-Translation']) }}">
          <div className="card">
            Languages &amp; Translation
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="{{ route('page.show', ['page' => 'Post-Graduate-Certificate-Medical-Disaster-Management']) }}">
          <div className="card">
            Medical &amp; Disaster Management
            <button className="arrow-btn">›</button>
          </div>
        </a>
        {/* 5th: View More in grid */}
        <a href="#">
          <div className="card view-more-card" id="viewMoreBtn">+ View More</div>
        </a>
        {/* Extra cards (hidden initially) */}
      </div>
    </div>
    <div className="container mt-4 mb-5">
      <h3 className="mt-5 p-5 text-center">CERTIFICATE PROGRAMMES</h3>
      <div className="search-box">
        <input type="text" id="search" placeholder="Search by subject" />
      </div>
      <div className="grid" id="cardGrid">
        {/* 1–4 */}
        <a href="{{ route('page.show', ['page' => 'certificate-programmes-health-nutrition-child-care']) }}">
          <div className="card">Health, Nutrition &amp; Child Care<br />
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="{{ route('page.show', ['page' => 'certificate-programmes-disability-special-education']) }}">
          <div className="card">
            Disability &amp; Special Education
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="{{ route('page.show', ['page' => 'certificate-programmes-agriculture-environment-animal-husbandry']) }}">
          <div className="card">
            Agriculture, Environment &amp; Animal Husbandry
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="{{ route('page.show', ['page' => 'certificate-programmes-languages-translation']) }}">
          <div className="card">
            Languages &amp; Translation
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="{{ route('page.show', ['page' => 'certificate-programmes-teaching-education']) }}">
          <div className="card">
            Teaching &amp; Education
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="{{ route('page.show', ['page' => 'certificate-programmes-arts-performing-arts-culture']) }}">
          <div className="card">
            Arts, Performing Arts &amp; Culture
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="{{ route('page.show', ['page' => 'certificate-programmes-technology-it-security']) }}">
          <div className="card">
            Technology, IT &amp; Security
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="{{ route('page.show', ['page' => 'certificate-programmes-law-rights-governance']) }}">
          <div className="card">
            Law, Rights &amp; Governance
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="{{ route('page.show', ['page' => 'certificate-programmes-disaster-management-environment']) }}">
          <div className="card">
            Disaster Management &amp; Environment
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="{{ route('page.show', ['page' => 'certificate-programmes-community-social-development']) }}">
          <div className="card">
            Community &amp; Social Development
            <button className="arrow-btn">›</button>
          </div>
        </a>
        <a href="{{ route('page.show', ['page' => 'certificate-programmes-business-skills-laboratory']) }}">
          <div className="card">
            Business, Skills &amp; Laboratory
            <button className="arrow-btn">›</button>
          </div>
        </a>
        {/* 5th: View More in grid */}
        <a href="#">
          <div className="card view-more-card" id="viewMoreBtn">+ View More</div>
        </a>
        {/* Extra cards (hidden initially) */}
      </div>
    </div>
  </div>
  {/* Newsletter */}
  <section className="py-5 newsletter-wrapper" style={{backgroundImage: 'url("images/background/bg1.jpg")', backgroundSize: 'cover'}}>
    <div className="container">
      <div className="subscride-inner">
        <div className="row style-1 justify-content-xl-between justify-content-lg-center align-items-center text-xl-start text-center">
          <div className="col-xl-7 col-lg-12">
            <div className="section-head mb-0">
              <h2 className="title text-white my-lg-3 mt-0">Subscribe our newsletter for newest books updates</h2>
            </div>
          </div>
          <div className="col-xl-5 col-lg-6">
            <form className="dzSubscribe style-1" action method="post">
              <div className="dzSubscribeMsg" />
              <div className="form-group">
                <div className="input-group mb-0">
                  <input name="dzEmail" required="required" type="email" className="form-control bg-transparent text-white" placeholder="Your Email Address" />
                  <div className="input-group-addon">
                    <button name="submit" value="Submit" type="submit" className="btn btn-primary btnhover">
                      <span>SUBSCRIBE</span>
                      <i className="fa-solid fa-paper-plane" />
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  {/* Newsletter End */}
</div>

