import sys
from PyQt4 import QtCore, QtGui, uic
from user import User

qtCreatorFile = "passwords.ui"

Ui_MainWindow, QtBaseClass = uic.loadUiType(qtCreatorFile)

class PasswordApp(QtGui.QMainWindow, Ui_MainWindow):
    def __init__(self):
        QtGui.QMainWindow.__init__(self)
        Ui_MainWindow.__init__(self)
        self.setupUi(self)
        self.add_user_button.clicked.connect(self.add_user)
        self.login_button.clicked.connect(self.authenticate_user)

    def add_user(self):
        username = self.new_user_name.text()
        password = self.new_password.text()
        if User.create(username, password):
            self._message_box("User Added", "User {} added".format(username))

    def authenticate_user(self):
        username = self.login_user_name.text()
        password = self.login_password.text()
        if User.authenticate(username, password):
            self._message_box("User Authenticated", 
                              "User {} authenticated".format(username))
        else:
            self._message_box("User Declined", 
                              "User {} declined".format(username))

    def _message_box(self, label, msg):
        w = QtGui.QWidget()
        QtGui.QMessageBox.about(w, label, msg)
        w.show()


if __name__ == "__main__":
    app = QtGui.QApplication(sys.argv)
    window = PasswordApp()
    window.show()
    sys.exit(app.exec_())
