import web
import app
render = web.template.render('application/views/')
class Docker:
   def GET(self):
       return  render.docker()

if __name__ == "__main__":
    web.config.debug= False
    app.run()
