import sockets
import sys


# Creando el socket TCP/IP
sock = socket.socket(socket.AF_INET, socket.SOCK_STREAM)

# Enlace de socket y puerto
server_address = ('localhost', 10000)
print >>sys.stderr, 'empezando a levantar %s puerto %s' % server_address
sock.bind(server_address)