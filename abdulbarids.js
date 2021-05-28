
      coursecontentname = new Array();
      coursecontentlinks = new Array();

      coursecontentname.push('1. DataStructure and Algorithms [Abdul Bari]');
      coursecontentlinks.push('https://nitallcourses.blogspot.com/2021/05/abdul-bari-ds.html');
      
      coursecontentname.push('2. Operating System [Sanchit - KnowledgeGate]');
      coursecontentlinks.push('https://nitallcourses.blogspot.com/2021/05/sunchit-jain-os.html');
      

    $(document).ready(function(){
          	nav = "";
        	for(i=0;i<coursecontentname.length;i++){
            	nav+='<li><a class="dropdown-item" href="'+coursecontentlinks[i]+'">'+ coursecontentname[i]+'</a></li>';
            }
          $('#coursecontent').html(nav);
        });