
/**
 * Application entrypoint
 */

document.addEventListener('DOMContentLoaded', function() {


  // Check if the current page is the home page

  // Event listener for category filter links
  const links = document.querySelectorAll('.category-filter');
  links.forEach(link => {
    console.log(admin_url);
      link.addEventListener('click', function (event) {
          event.preventDefault();
          const categoryId = this.dataset.categoryId;

          // Prepare data for POST request
          const formData = new URLSearchParams();
          formData.append('action', 'filter_posts');
          formData.append('category_id', categoryId);

          // Log the ajax_url for debugging
          console.log('AJAX URL:', categoryId);

          // Send Ajax request
          fetch(admin_url.admin_url, {  // Use localized ajax_url directly
              method: 'POST',
              body: formData,
              headers: { 'Content-type': 'application/x-www-form-urlencoded' }
          })
              .then(response => response.text().then(text => {
                  try {
                      const data = JSON.parse(text);
                      // Handle the response
                      if (data.success) {
                          const postsContainer = document.getElementById('portfolioGrid');
                          postsContainer.innerHTML = data.data.html;
                      } else {
                          console.error(data.data.message);
                      }
                  } catch (error) {
                      console.error('Error parsing JSON:', error);
                      console.error('Response text:', text);
                  }
              }))
              .catch(error => {
                  console.error('Error:', error);
              });
      });
  });
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
