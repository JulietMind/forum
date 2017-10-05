import kivy
from kivy.app import App
from kivy.uix.boxlayout import BoxLayout
from kivy.config import Config

Config.set('graphics', 'width', 800)
Config.set('graphics', 'height', 400)

class content01(BoxLayout):
	None

class MainApp(App):
	title = "Hola Mundo"
	def build(self):
		return content01()

if __name__ == '__main__':
	MainApp().run()