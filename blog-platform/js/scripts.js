// Example of auto-saving drafts every 5 seconds
let autoSaveInterval;

function startAutoSave(postId) {
    autoSaveInterval = setInterval(function() {
        const title = document.querySelector('input[name="title"]').value;
        const content = document.querySelector('textarea[name="content"]').value;
        
        if (title && content) {
            fetch('autosave.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ postId, title, content }),
            })
            .then(response => response.json())
            .then(data => console.log('Auto-saved:', data))
            .catch(error => console.error('Error:', error));
        }
    }, 5000); // Save every 5 seconds
}

// Start the auto-save feature when the create or edit post page loads
window.onload = function() {
    const postId = document.querySelector('input[name="post_id"]')?.value;
    if (postId) {
        startAutoSave(postId);
    }
};

// Stop auto-saving when the user navigates away
window.onbeforeunload = function() {
    clearInterval(autoSaveInterval);
};
