import web # pip installl web.py

urls = (
    '/', 'application.controllers.contenedor.Contenedor', #/= raiz  Hello la clase 
    '/docker','application.controllers.docker.Docker',
    '/ubuntu','application.controllers.ubuntu.Ubuntu'

)
app = web.application(urls, globals())

render = web.template.render('templates/')





if __name__ == "__main__":
    web.config.debug= False
    app.run()