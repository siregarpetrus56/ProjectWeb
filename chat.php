<!DOCTYPE html>
<html>
<head>
  <title>Chatting</title>
  <link rel="stylesheet" type="text/css" href="chat.css">
</head>
<body>
  <div class="container">
    <h1>Chatting</h1>

    <div class="chatbox" id="chatbox"></div>

    <div class="input-group">
      <input type="text" id="username" placeholder="Username" />
      <input type="text" id="message" placeholder="Tulis pesan" />
      <button onclick="sendMessage()">Kirim</button>
	  <button onclick="clearMessages()">Hapus</button>
    </div>
  </div>

  <script>
    // Menyimpan pesan-pesan yang dikirim
    let messages = [];

    // Mengambil elemen chatbox
    const chatbox = document.getElementById('chatbox');

    // Mengirim pesan
    function sendMessage() {
      const usernameInput = document.getElementById('username');
      const messageInput = document.getElementById('message');
      const username = usernameInput.value;
      const message = messageInput.value;
      const chatMessage = { username, message };
      messages.push(chatMessage);
      displayMessages();
      usernameInput.value = '';
      messageInput.value = '';
    }

    // Menampilkan pesan-pesan pada chatbox
    function displayMessages() {
      chatbox.innerHTML = '';
      messages.forEach(function(chatMessage, index) {
        const messageContainer = document.createElement('div');
        messageContainer.className = 'message';

        const sender = document.createElement('p');
        sender.className = 'sender';
        sender.textContent = chatMessage.username;

        const content = document.createElement('p');
        content.className = 'content';
        content.textContent = chatMessage.message;

        messageContainer.appendChild(sender);
        messageContainer.appendChild(content);

        const deleteButton = document.createElement('button');
        deleteButton.className = 'delete-button';
        deleteButton.textContent = 'Hapus';
        deleteButton.onclick = function() {
          deleteMessage(index);
        };
        messageContainer.appendChild(deleteButton);

        chatbox.appendChild(messageContainer);
      });

      chatbox.scrollTop = chatbox.scrollHeight;
    }

    // Menghapus pesan
    function deleteMessage(index) {
      messages.splice(index, 1);
      displayMessages();
    }

	function clearMessages() {
      messages = [];
      displayMessages();
    }
  </script>
<br>
<center>
<div class="beranda">
  <a href="coba.php"><button>Kembali ke Beranda</button></a>
</div>
</center>
</body>
</html>
