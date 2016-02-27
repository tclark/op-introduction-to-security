

class User:
""" A simple user class for demonstrating some principles
of password handling. Not intended  for serious use.
"""

    @staticmethod
    def create(username="", password=""):
    """ Saves supplied username and password in a text file.
    returns True on success If either argument is ommitted or
    is empty, does nothing and returns False.
    """
        if username != "" and password != "":
            with open("passwords.txt", "a") as f:
                f.write("{}:{}\n".format(username, password))
            return True
        else:
            return False

    @staticmethod
    def authenticate(username, password):
    """ Attempts to authenticate a user with the supplied username and
    password. Returns True on success, false otherwise.
    """
        lines = list()
        with open("passwords.txt", "r") as f:
            lines = f.readlines()
        for line in lines:
            line = line.rstrip("\n")
            stored_username, stored_password = line.split(":")
            if stored_username == username and stored_password == password:
                return True
        return False


