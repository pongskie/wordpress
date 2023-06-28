class Search {
  // 1. describe and create or initiate our object

  constructor() {
    this.resultsDiv = $('#search-results');
    this.searchField = $('#search-term');
    this.events();
    this.isSpinnerVisible = false;
    this.previousValue;
    this.typingTimer;
  }

  // 2. events

  events() {
    this.searchField.on('keyup', this.typingLogic.bind(this));
  }

  // 3. methods (function,  action...)

  typingLogic() {
    if (this.searchField.val() != this.previousValue) {
      clearTimeout(this.typingTimer);
      if (this.searchField.val()) {
        if (!this.isSpinnerVisible) {
          this.resultsDiv.html(
            '<div class="text-center"><div class="spinner-loader"><div></div><div></div><div></div><div></div></div></div>'
          );
          this.isSpinnerVisible = true;
        }
        this.typingTimer = setTimeout(this.getResults.bind(this), 750);
      } else {
        this.resultsDiv.html('');
        this.typingTimer = setTimeout(this.getLatest.bind(this), 750);
        this.isSpinnerVisible = false;
      }
    }

    this.previousValue = this.searchField.val();
  }

  getLatest() {
    $.getJSON(epldtData.root_url + '/wp-json/epldt/v1/job?page=', (posts) => {
      this.resultsDiv.html(`
            ${
              posts.length
                ? '<div class="list-filter"><div class="grid-x grid-padding align-middle"><div class="cell medium-9 large-9"><p><span class="count"></span></p></div><div class="cell medium-3 large-3"></div></div></div><div class="m_listing jobs">'
                : '<p>No posts found.</p>'
            }
                ${posts
                  .map(
                    (item) => `
                    <div class="row align-items-center job-item" href="<?php the_permalink(); ?>">
                        <div class="col-md-10">
                            <h2 class="job-title">${item.title}</h2>
                            <ul class="job-location">
                                <li><i class="uil uil-map-marker"></i> ${item.job_location}</li>
                            </ul>
                        </div>
                        <div class="col-md-2">
                            <div class="d-grid gap-2">
                                <a class="btn btn-danger btn-sm" href="${item.permalink}">Apply Now</a>
                            </div>
                        </div>
                    </div>
                `
                  )
                  .join('')}
            ${
              posts.length
                ? '</div><div class="text-center"><button class="btn btn-hollow btn-animated btn-large btn-rounded-right load-more-jobs">Load More</button></div>'
                : ''
            }
            `);
      this.isSpinnerVisible = false;
      var n = $('.job-item').length;
      $('.count').text('Displaying ' + n + ' recent job posts');
    });
  }

  getResults() {
    $.getJSON(
      epldtData.root_url +
        '/wp-json/epldt/v1/job?term=' +
        this.searchField.val(),
      (posts) => {
        this.resultsDiv.html(`
            ${
              posts.length
                ? '<div class="list-filter"><div class="grid-x grid-padding align-middle"><div class="cell medium-9 large-9"><p><span class="count"></span></p></div><div class="cell medium-3 large-3"></div></div></div><div class="m_listing jobs">'
                : '<p>No posts found.</p>'
            }
                ${posts
                  .map(
                    (item) => `
                    <div class="row align-items-center job-item" href="<?php the_permalink(); ?>">
                        <div class="col-md-10">
                            <h2 class="job-title">${item.title}</h2>
                            <ul class="job-location">
                                <li><i class="uil uil-map-marker"></i> ${item.job_location}</li>
                            </ul>
                        </div>
                        <div class="col-md-2">
                            <div class="d-grid gap-2">
                                <a class="btn btn-danger btn-sm" href="${item.permalink}">Apply Now</a>
                            </div>
                        </div>
                    </div>
                `
                  )
                  .join('')}
            ${posts.length ? '</div>' : ''}
            `);
        this.isSpinnerVisible = false;
        var n = $('.job-item').length;
        $('.count').text('' + n + ' results found');
      }
    );
  }
}

var search = new Search();
