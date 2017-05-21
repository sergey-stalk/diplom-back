$(document).ready(function() {
  
 $('.wrapper>article').not(':first-of-type').hide();
 
  
  $('.wrapper>h3').click(function() {
    
    var findArticle = $(this).next();
    var findWrapper = $(this).closest('.wrapper');
    
    if (findArticle.is(':visible')) {
      findArticle.slideUp('fast');
    }
    else {
      findWrapper.find('>article').slideUp('fast');
      findArticle.slideDown('fast');
    }
  });
  
});