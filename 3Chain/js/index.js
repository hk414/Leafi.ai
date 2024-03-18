// Header nav
function redirectToPageAndScroll(url) {
  window.location.href = url;

  var sectionId = url.split("#")[1];

  var section = document.getElementById(sectionId);
  if (section) {
    section.scrollIntoView({ behavior: "smooth" });
  }
}

function redirectToPage(url) {
  window.location.href = url;
}

new Rellax(".btc-illustration", {
  horizontal: true,
});
new Rellax("#gpu-illustration", {
  horizontal: true,
});

document.addEventListener("DOMContentLoaded", function () {
  const countElement1 = document.getElementById("count-individual-learners");
  const countElement2 = document.getElementById("count-universities-partners");
  const countElement3 = document.getElementById("count-countries");

  const triggerSection = document.getElementById("triggerSection");

  const finalCountIndividualLeaners = 128;
  const finalCountUniversitiesPartners = 35;
  const finalCountCountries = 9;

  const animationDuration = 3000;
  const interval1 = animationDuration / finalCountIndividualLeaners;
  const interval2 = animationDuration / finalCountUniversitiesPartners;
  const interval3 = animationDuration / finalCountCountries;

  let currentCount1 = 1;
  let currentCount2 = 1;
  let currentCount3 = 1;

  const increaseCount = (countElement, finalCount, currentCount, interval) => {
    countElement.textContent = currentCount;
    currentCount++;

    if (currentCount <= finalCount) {
      setTimeout(
        () => increaseCount(countElement, finalCount, currentCount, interval),
        interval
      );
    }
  };

  const options = {
    threshold: 0.5,
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        increaseCount(
          countElement1,
          finalCountIndividualLeaners,
          currentCount1,
          interval1
        );
        increaseCount(
          countElement2,
          finalCountUniversitiesPartners,
          currentCount2,
          interval2
        );
        increaseCount(
          countElement3,
          finalCountCountries,
          currentCount3,
          interval3
        );
        observer.disconnect();
      }
    });
  }, options);

  observer.observe(triggerSection);
});

document.addEventListener("DOMContentLoaded", function () {
  const headerBody = document.querySelector(".header__body");
  const headerBodyChildren = headerBody.children;

  for (let i = 0; i < headerBodyChildren.length; i++) {
    setTimeout(() => {
      headerBodyChildren[i].classList.add("visible");
    }, i * 200);
  }
});

document.addEventListener("DOMContentLoaded", function () {
  const getStartedSection = document.getElementById("get-started");
  const cards = document.querySelectorAll(".card");

  const options = {
    threshold: 0.5,
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        cards.forEach((card, index) => {
          setTimeout(() => {
            card.classList.add("appear");
          }, index * 2000);
        });

        observer.disconnect();
      }
    });
  }, options);

  observer.observe(getStartedSection);

  // Add mouseover event listener
  getStartedSection.addEventListener("mouseover", function () {
    cards.forEach((card, index) => {
      setTimeout(() => {
        card.classList.add("appear");
      }, index * 200);
    });
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const getStartedSection = document.getElementById("about-us");
  const cards = document.querySelectorAll(".grid, .banner");

  const options = {
    threshold: 0.5,
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        cards.forEach((card, index) => {
          setTimeout(() => {
            card.classList.add("appear");
          }, index * 100);
        });

        observer.disconnect();
      }
    });
  }, options);

  observer.observe(getStartedSection);

  // Add mouseover event listener
  getStartedSection.addEventListener("mouseover", function () {
    cards.forEach((card, index) => {
      setTimeout(() => {
        card.classList.add("appear");
      }, index * 200);
    });
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const getStartedSection = document.getElementById("our-features");
  const cards = document.querySelectorAll(".grid");

  const options = {
    threshold: 0.5,
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        cards.forEach((card, index) => {
          setTimeout(() => {
            card.classList.add("appear");
          }, index * 2000);
        });

        observer.disconnect();
      }
    });
  }, options);

  observer.observe(getStartedSection);

  // Add mouseover event listener
  getStartedSection.addEventListener("mouseover", function () {
    cards.forEach((card, index) => {
      setTimeout(() => {
        card.classList.add("appear");
      }, index * 200);
    });
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const getStartedSection = document.getElementById("pricing-plan-container");
  const cards = document.querySelectorAll(".plan");

  const options = {
    threshold: 0.5,
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        cards.forEach((card, index) => {
          setTimeout(() => {
            card.classList.add("appear");
          }, index * 500);
        });

        observer.disconnect();
      }
    });
  }, options);

  observer.observe(getStartedSection);

  // Add mouseover event listener
  getStartedSection.addEventListener("mouseover", function () {
    cards.forEach((card, index) => {
      setTimeout(() => {
        card.classList.add("appear");
      }, index * 200);
    });
  });
});
