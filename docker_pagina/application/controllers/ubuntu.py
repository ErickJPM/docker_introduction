import web
import app
render = web.template.render('application/views/')
class Ubuntu:
   def GET(self):
       return  render.ubuntu()

if __name__ == "__main__":
    web.config.debug= False
    app.run()
