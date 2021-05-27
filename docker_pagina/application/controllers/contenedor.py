import web
import app
render = web.template.render('application/views/')
class Contenedor:
   def GET(self):
       return  render.contenedor()

if __name__ == "__main__":
    web.config.debug= False
    app.run()
