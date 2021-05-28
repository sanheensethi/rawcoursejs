
      coursename = new Array();
      courselinks = new Array();
      coursename.push('1. DataStructure and Algorithms [Abdul Bari]');
      courselinks.push('https://nitallcourses.blogspot.com/2021/05/abdul-bari-ds.html');
      

    
      coursename.push('2. Operating System [Sanchit - KnowledgeGate]');
      courselinks.push('https://nitallcourses.blogspot.com/2021/05/sunchit-jain-os.html');
      



    $(document).ready(function(){
          	nav = "";
        	for(i=0;i<coursename.length;i++){
            	nav+='<li><a class="dropdown-item" href="'+courselinks[i]+'">'+coursename[i]+'</a></li>';
            }
          $('#navigationcourses').html(nav);
        });