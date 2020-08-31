<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us</h1>
  <p>TCL is a fast-growing consumer electronics company and leading player in the global TV industry. Founded in 1981, it now operates in over 160 markets globally. According to Sigmaintell, TCL ranked 2nd in the global TV market in terms of sales volume in 2019. TCL specializes in the research, development and manufacturing of consumer electronics products ranging from TVs, audio and smart home products.</p>
 
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="/images/ceo.png" alt="" style="width:100%">
      <div class="container">
        <h2>Mr Li Dongsheng</h2>
        <p class="title">CEO & Founder</p>
        <p>Li Dongsheng is the Chairman of the Board of Directors and an Executive Director of the Company TCL Electronics Holdings Limited, the Chairman of the Board, the Chief Executive Officer and Founder of TCL Technology. Li is one of the most recognized business leaders in China.

        </p>
        <p>Ceo@tcl.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

<div class="column">
    <div class="card">
     
      <div class="container">
        <h2>Mr Oliver Wang</h2>
        <p class="title">IT DIRECTOR</p>
        <p>Initiate, lead and/or support IT requirements of the assigned business functions and their delivery in accordance with project goals, time scales and costs. Monitoring technologies for the various lines of business including: stores and in-house.Network Infrastructure & Storage Management across the portfolio.Leading the IT ERP and infrastructure planning for upcoming projects</p>
        <p>oliverwang@tcl.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
 
  
  <div class="column">
    <div class="card">
     
      <div class="container">
        <h2>Mr Huang Wen Shui</h2>
        <p class="title">IT HEAD</p>
        <p>Overall responsible for devising and updating IT strategy and roadmap for stores and at an enterprise level
            Prepare and execute IT budget and ensure the budget guidelines are followed and expenditure is within IT budget
          Lead, manage and train the team across multiple locations across India
          Working closely with vendor partners, business / functional heads, supply chain team etc.</p>
        <p>huangwenshui@tcl.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
