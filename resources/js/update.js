// dom elements

bugStatus = document.querySelector('bug-status');
checked = document.querySelectorAll('.toggle-completed');
features = document.querySelectorAll('.toggle-feature-completed');
   

// event listeners
checked.forEach(function(check)
{
    check.addEventListener('click', function(e) {
        let bugId = e.target.value; 
        let projectId = e.target.name;
            
        update('bugs', projectId, bugId);
        setTimeout(() => {
            location.reload()
        }, 1500);
    })
});


features.forEach(function(feature)
{
    feature.addEventListener('click', function(e) {
        let featureId = e.target.value;
        let projectId = e.target.name;

    update('features', projectId, featureId);
    setTimeout(() => {
        location.reload()
    }, 1500);
    });
})


/// methods 

const update = (type, projectId, bugId) =>
{
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr('content')
        }
    });
   
    $.ajax({
        url: `/api/projects/${projectId}/${type}/${bugId}`,
        method: 'PUT',
        dataType: 'json',
        data: {
            id: bugId,
            project_id: projectId,
            completed: 1
        },
        success: function(data){
        }

    });

  }
  