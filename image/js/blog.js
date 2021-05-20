//var listDiv=document.getElementById("list");
var listDiv=$("#list");
function getBlog(){


	$.ajax({
		method:"Get",
		url:"api/blog/get.Saved.html"
	}).done(function(data){
		data = JSON.parse(data);
		showBlogs(data);
	}).fail(function(err){
		console.log(err);
	})
}
getBlog();
function showBlogs(blogs){
	var listHTML="";

	for (var i = 0; i < blogs.length; i++) {
		listHTML+= "<div class='blog-item'>"+
		"<img src='"+blogs[i].img+"' width='200px'>"+
					  "<h3>"+ blogs[i].title + "</h3>" +
					  "<p>"+ blogs[i].description + "</p>"+
					  "</div>";
	}

	listDiv.html(listHTML);
}
function saveBlog(e){
	e.preventDefault();
	var titleInp = $("#title");
	var descInp = $("#description");
var imgInp = $("#img");

	var fm = new FormData();
	fm.append('title',titleInp.val());
	fm.append('description',descInp.val());
	fm.append('image',imgInp[0].files[0]);


	$.ajax ({ 
method:"POST", 
url: "api/blog/save.Saved.html", 
data: fm,
processData: false,
contentType: false 

}).done(function(data){ 
getBlog();
titleInp.val('');
descInp.val('') ;
}).fail(function(err){ 
console.log(err); 
}) ;

}
function findBlogs(){
	var search = $("#search").val();
	$.ajax({
		method:"GET",
		url: "api/blog/search.Saved.html?key=" + search 

	}).done(function(data){
data = JSON.parse(data) ;
showBlogs(data);
	});
}
