pipeline{
   
    agent any
    stages {
        stage('build image'){
            steps{
                scrypt {
                    dockerapp = docker.build("sistema_imagem", '-f ./dockerfile/Dockerfile ./dockerfile')        
                }
            }
        } 
    }
}