# Docker-compose for Laravel Full-Stack Development


##### For using Laravel echo server, application layout must contains the following section
```
<script>
  window.echoConfig = {
    host: {!! json_encode(env('ECHO_SERVER_HOST')) !!},
    port: {!! json_encode(env('ECHO_SERVER_PORT')) !!}
  };
</script>
```
 And bootstrap.js
```
window.io = require('socket.io-client');

const host = window.echoConfig.port
  ? `${window.echoConfig.host}:${window.echoConfig.port}`
  : window.echoConfig.host;

window.Echo = new Echo({
  broadcaster: 'socket.io',
  namespace: 'App.Events.Broadcasts',
  host,
});
``` 