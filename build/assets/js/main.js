document.addEventListener('DOMContentLoaded', function() {
    function reposition() {
        var modals = document.querySelectorAll('.modal');
        modals.forEach(function(modal) {
            var dialog = modal.querySelector('.modal-dialog');
            modal.style.display = 'block';
            
            var marginTop = Math.max(0, (window.innerHeight - dialog.offsetHeight) / 2);
            dialog.style.marginTop = marginTop + 'px';
        });
    }

    // Reposition when a modal is shown
    document.querySelectorAll('.modal').forEach(function(modal) {
        modal.addEventListener('show.bs.modal', reposition);
    });

    // Reposition when the window is resized
    window.addEventListener('resize', function() {
        var visibleModals = document.querySelectorAll('.modal:not([style*="display: none"])');
        visibleModals.forEach(reposition);
    });

    var currentYear = new Date().getFullYear();
    document.getElementById('year').textContent = '2018 - ' + currentYear;
});
