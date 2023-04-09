pipeline{
   
    agent any
    stages {
        stage('Build image'){
            steps{
                scrypt {
                    dockerapp = docker.build("sistema_imagem", '-f ./dockerfile/Dockerfile ./dockerfile')        
                }
            }
        } 
    }
}